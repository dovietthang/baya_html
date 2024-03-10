

let theWheel = new Winwheel({
    numSegments: objtem.segments.length, // Specify number of segments.
    outerRadius: 150, // Set outer radius so wheel fits inside the background.
    drawMode: objtem.photo ? "image" : '', // drawMode must be set to image.
    drawText: objtem.show_text == 1? true : false, // Need to set this true if want code-drawn text on image wheels.
    textFontSize: 12,
    textOrientation: "curved", // Note use of curved text.
    textDirection: "reversed", // Set other text options as desired.
    textAlignment: "outer",
    textMargin: 5,
    textFontFamily: "monospace",
    textStrokeStyle: "black",
    textLineWidth: 2,
    textFillStyle: "white",
    fillStyle: '#7de6ef',
    outerRadius: 240,
    // Define segments.
    segments: objtem.segments,
    // Specify the animation to use.
    animation: {
        type: "spinToStop",
        duration: objtem.duration,
        spins: objtem.spin,
        callbackFinished : 'alertPrize()'
    },
});

let loadedImg = new Image();
loadedImg.onload = function () {
    theWheel.wheelImage = loadedImg;
    theWheel.draw();
};

loadedImg.src = objtem.photo;

let wheelPower = 0;
let wheelSpinning = false;

function generateUUID() {
    var d = new Date().getTime();
    var uuid = 'xxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = (d + Math.random()*16)%16 | 0;
        d = Math.floor(d/16);
        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
    });
    return uuid.toUpperCase();
};
function senAjax() {
    const code = generateUUID()
    const gifId = $('.input-text.gift-title').attr('gif-id')
    const phone = $(".wheel-block .fullname").val()
    const email = $(".wheel-block .email").val()
    $.ajax({
        type: "GET",
        url: '/game-send',
        data: {code: code, gifId: gifId, phone: phone, email: email },
        success: function (res) {
           if(res){
            if(res.success){
                var winningSegment = theWheel.getIndicatedSegment();
                $('.wheel-prize').hide()
                if(winningSegment.message){
                    $('.wheel-result .note .desc').text(winningSegment.message)
                }
                $('.wheel-result').show()
            }
           }
        },
    });
 }
function alertPrize() {
    var winningSegment = theWheel.getIndicatedSegment();
    $(".wheel-block .play").prop("disabled", false);
    $('.wheel-form').hide()
    $('.input-text.gift-title').val(winningSegment.content)
    const gifId = winningSegment.id
    $('.input-text.gift-title').attr('gif-id', gifId)
    $('.wheel-prize').show()
}

function resetWheel() {
    theWheel.stopAnimation(false);
    theWheel.rotationAngle = 0;
    theWheel.draw();
    wheelSpinning = false;
}

validate = function () {
    var name = $(".wheel-block .fullname");
    var email = $(".wheel-block .email");
    name.closest(".item").find(".error").html("");
    email.closest(".item").find(".error").html("");
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var testmail = regex.test(email.val());
    var regexPhone = /((09|03|07|08|05)+([0-9]{8})\b)/g;
    var testname = regexPhone.test(name.val());
    if (!name.val().length) {
        name.closest(".item")
            .find(".error")
            .css("color", "red")
            .html("Đây là trường bắt buộc.");
        testname = false;
    } else if (!testname) {
        email
            .closest(".item")
            .find(".error")
            .css("color", "red")
            .html("Bạn nhập sai định dạng số điện thoại.");
    }
    if (!email.val().length) {
        email
            .closest(".item")
            .find(".error")
            .css("color", "red")
            .html("Đây là trường bắt buộc.");
    } else if (!testmail) {
        email
            .closest(".item")
            .find(".error")
            .css("color", "red")
            .html("Bạn nhập sai định dạng email.");
    }
    return testmail && testname;
};
getGift = function () {
    if (!validate()) {
        return;
    }
    $(".wheel-block .play").prop("disabled", true);
    var data = {};
    data.email = $(".wheel-block .email").val();
    data.fullname = $(".wheel-block .fullname").val();
    if (wheelPower == 1) {
        theWheel.animation.spins = 2;
    } else if (wheelPower == 2) {
        theWheel.animation.spins = 5;
    } else if (wheelPower == 3) {
        theWheel.animation.spins = 8;
    }
    $.ajax({
        type: "GET",
        url: 'game-check',
        data: {email: data.email, phone: data.fullname},
        success: function (res) {
            if(res && res.success){
                $(".wheel-block .play").removeAttr("disabled");
                const fg = $(".wheel-block .email")
                fg.closest(".item")
                .find(".error")
                .css("color", "red")
                .html("Bạn đã đăng ký nhận ưu đãi, vui lòng kiểm tra lại số điện thoại.");
            }
            else{
                setTimeout(() => {
                    if (wheelSpinning == false) {
                        if (wheelPower == 1) {
                            theWheel.animation.spins = 3;
                        } else if (wheelPower == 2) {
                            theWheel.animation.spins = 8;
                        } else if (wheelPower == 3) {
                            theWheel.animation.spins = 15;
                        }

                        var rangeStop = objtem.rate && objtem.rate[0] ? objtem.rate : null;
                        if(rangeStop){
                            var stopAngle = rangeStop[Math.floor(Math.random() * rangeStop.length)];
                            // theWheel.animation.stopAngle = stopAngle;
                            // console.log("gift: " + rangeStop);
                            // console.log('stopat: ' + stopAngle);
                            // console.log('spin: ' + theWheel.animation.spins);
                            // console.log(theWheel.animation);
                            theWheel.animation.stopAngle = stopAngle;
                        }
                        theWheel.startAnimation();
                        wheelSpinning = true;
                    }
                }, 700);
            }
        },
    });
};


$(document).ready(function () {
    $(".wheel-block .play").click(function () {
        getGift();
    });
    $(".wheel-prize .playagain").click(function () {
        $(".wheel-block .play").prop("disabled", false);
        again();
    });
    $(".wheel-prize .confirm").click(function () {
        $(".wheel-prize .confirm").prop("disabled", true);
        senAjax()
    });
});
