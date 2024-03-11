<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Helpers\Helpers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Validator;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    public function index(Request $rq)
    {
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Post')],
        ];
        if ($rq->ajax()) {
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search) {
                $query = Post::where('type', null);
                $posts = $query->where('title', 'like', '%' . $rq->search . '%')
                    ->orwhere('slug', 'like', '%' . $rq->search . '%')->where('type', null)->orderBy('id')->paginate($numpage);
            } else {
                $posts = Post::orderBy('id', 'desc')->where('type', null)->paginate($numpage);
            }
            return view('layout-admin.pages.blogs.ajax-filter')->with('posts', $posts)->render();
        } else {
            $posts = Post::orderBy('id', 'desc')->where('type', null)->paginate($numpage);
            return view('layout-admin.pages.blogs.index', compact('posts', 'breadcrumb'));
        }
    }
    public function add()
    {
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => route('index-post'), 'name' => __('Post')],
            ['link' => 'javascript:void()', 'name' => __('Add')]
        ];
        $cates = Category::where('type', 'Post')->where('status', 1)->get();
        return view('layout-admin.pages.blogs.add', compact('cates', 'breadcrumb'));
    }
    public function save(Request $rq)
    {

        $rules = [
            'title' => 'required|max:100|unique:products,title',
            'slug' => 'required|max:100|unique:products,slug',
            'cate_id' => 'required'
        ];
        $messages = Helpers::switchLanguage(session()->get('locale'));
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            $post = new Post();
            $post->title = $rq->title;
            $post->slug = $rq->slug;
            $post->content = $rq->contents;
            $post->photo = $rq->file_thumb;
            $post->category = 0;
            $post->status  = $rq->status;
            $post->added_by = Auth::user()->id;
            $post->save();
            $post->cates()->attach($rq->cate_id);
            return response()->json([
                'type' => 'insert',
                'success' => true,
                'message' => __('Add') . ' ' . __('post') . ' ' . __('success') . ' !'
            ]);
        } else {
            return response()->json([
                'type' => 'insert',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Add') . ' ' . __('post') . ' ' . __('error') . ' !'
            ]);
        }
    }

    public function edit($id)
    {
        if ($id) {
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' => __('Dashboard')],
                ['link' => route('index-post'), 'name' => __('Post')],
                ['link' => 'javascript:void()', 'name' => __('Edit')]
            ];
            $cates = Category::where('type', 'Post')->where('status', 1)->get();
            $post = Post::find($id);
            return view('layout-admin.pages.blogs.edit', compact('post', 'cates', 'breadcrumb'));
        }
    }

    public function update(Request $rq)
    {
        $rules = [
            'title' => 'required|max:100|unique:products,title',
            'slug' => 'required|max:100|unique:products,slug',
            'cate_id' => 'required'
        ];
        $messages = Helpers::switchLanguage('vi');
        $check = Validator::make($rq->all(), $rules, $messages);
        if ($check->passes()) {
            $post = Post::find($rq->id);
            $post->title = $rq->title;
            $post->slug = $rq->slug;
            $post->content = $rq->contents;
            $post->status  = $rq->status;
            $post->category = 0;
            $post->photo = $rq->file_thumb;
            $post->save();
            $post->cates()->sync($rq->cate_id);
            return response()->json([
                'type' => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('post') . ' ' . __('success') . ' !'
            ]);
        } else {
            return response()->json([
                'type' => 'update',
                'success' => false,
                'messages' => $check->errors(),
                'message' => __('Update') . ' ' . __('post') . ' ' . __('error') . ' !'
            ]);
        }
    }

    public function delete(Request $rq, $id)
    {
        if ($id) {
            $currentPage = (int)$rq->page;
            $post = Post::find($id);
            $post->delete();
            $post->cates()->sync([]);
            $posts = Post::orderBy('id', 'desc')->paginate($rq->pagenum);
            $getTotalPage = $posts->lastPage();
            if ($rq->search != '') {
                $posts = Post::where('title', 'like', '%' . $rq->search . '%')
                    ->orwhere('slug', 'like', '%' . $rq->search . '%')->orderBy('id')->paginate($rq->pagenum);
                $getTotalPage = $posts->lastPage();
                if ($currentPage > $getTotalPage - 1) {
                    Paginator::currentPageResolver(function () use ($getTotalPage) {
                        return $getTotalPage;
                    });
                }
            } else {
                if ($currentPage > $getTotalPage - 1) {
                    Paginator::currentPageResolver(function () use ($getTotalPage) {
                        return $getTotalPage;
                    });
                }
            }
            return response()->json([
                'success' => true,
                'message' => __('Delete post') . ' ID ' . $id . ' ' . __('Success'),
                'messages' => view('layout-admin.pages.blogs.ajax-filter')->with('posts', $posts)->render()
            ]);
        }
    }

    public function listPage(Request $rq)
    {
        $numpage = 5;
        $breadcrumb = [
            ['link' => route('dashboard'), 'name' => __('Dashboard')],
            ['link' => 'javascript:void()', 'name' => __('Page')],
        ];
        if ($rq->ajax()) {
            $rq->pagenum ? $numpage = $rq->pagenum : $numpage;
            if ($rq->search) {
                $query = Post::where('type', 'page');
                $posts = $query->where('title', 'like', '%' . $rq->search . '%')
                    ->orwhere('slug', 'like', '%' . $rq->search . '%')->where('type', 'page')->orderBy('id')->paginate($numpage);
            } else {
                $posts = Post::orderBy('id', 'desc')->where('type', 'page')->paginate($numpage);
            }
            return view('layout-admin.pages.blog_page.ajax-filter')->with('posts', $posts)->render();
        } else {
            $posts = Post::orderBy('id', 'desc')->where('type', 'page')->paginate($numpage);
            return view('layout-admin.pages.blog_page.index', compact('posts', 'breadcrumb'));
        }
    }

    public function editPage($id)
    {
       if ($id) {
            $breadcrumb = [
                ['link' => route('dashboard'), 'name' => __('Dashboard')],
                ['link' => route('index-page'), 'name' => __('Page')],
                ['link' => 'javascript:void()', 'name' => __('Edit')]
            ];
            $post = Post::find($id);
            return view('layout-admin.pages.blog_page.edit', compact('post', 'breadcrumb'));
        }
    }

    public function updatePage(Request $rq)
    {
        $post = Post::find($rq->id);
            $post->title = $rq->title;
            $post->content = $rq->contents;
            $post->category = $rq->category;
            $post->save();
            return response()->json([
                'type' => 'update',
                'success' => true,
                'message' => __('Update') . ' ' . __('page') . ' ' . __('success') . ' !'
            ]);
    }
}
