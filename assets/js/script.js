$(document).ready(function () {
  var current_fs, next_fs, previous_fs; //fieldsets
  var opacity;
  var current = 1;
  var steps = $("fieldset").length;

  setProgressBar(current);

  function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
  }

  function checkVal1() {
    if (
      $("#fname").val() !== "" &&
      $("#lname").val() !== "" &&
      $("#phno").val() !== "" &&
      $("#email").val() !== "" &&
      $("#fnameWarn").html()==="" &&
      $("#lnameWarn").html()==="" &&
      $("#phnoWarn").html()==="" &&
      $("#emailWarn").html()===""
    ) {
      $(".next").attr("disabled", false);
    } else {
      $(".next").attr("disabled", true);
    }
  }

  function checkVal2() {
    if (
      $("#address").val() !== "" &&
      $("#pincode").val() !== "" &&
      $("#city").val() !== "" &&
      $("#state").val() !== "" &&
      $("#addrWarn").html() === "" &&
      $("#pincodWarn").html() === "" &&
      $("#cityWarn").html() === "" &&
      $("#stateWarn").html() === ""
    ) {
      $(".next").attr("disabled", false);
    } else {
      $(".next").attr("disabled", true);
    }
  }

  function checkVal3() {
    if (
      $("#cardno").val() !== "" &&
      $("#month").val() !== "" &&
      $("#year").val() !== "" &&
      $("#cvv").val() !== "" &&
      $("#cardWarn").html() === "" &&
      $("#monWarn").html() === "" &&
      $("#yearWarn").html() === "" &&
      $("#cvvWarn").html() === ""
    ) {
      $(".next").attr("disabled", false);
    } else {
      $(".next").attr("disabled", true);
    }
  }

  $(function () {
    checkVal1();
    checkVal2();
    $(".next").attr("disabled", true);
  });

  $("#fname").keydown(() => {
    if ($("#fname").val().length < 1) {
      $("#fnameWarn").html("Enter the first name of length more than 2");
      $("#fnameWarn").show();
      $(".next").attr("disabled", true);
    } else {
      $("#fnameWarn").html("");
      $("#fnameWarn").hide();
      $(".next").attr("disabled", false);
    }
    checkVal1();
  });

  $("#lname").keydown(() => {
    if ($("#lname").val().length < 1) {
      $("#lnameWarn").html("Enter the last name of length more than 2");
      $("#lnameWarn").show();
      $(".next").attr("disabled", true);
    } else {
      $("#lnameWarn").html("");
      $("#lnameWarn").hide();
      $(".next").attr("disabled", false);
    }
    checkVal1();
  });

  $("#phno").keydown(() => {
    if ($("#phno").val().length <= 8) {
      $("#phnoWarn").html("Enter the contact no of length 10");
      $("#phnoWarn").show();
      $(".next").attr("disabled", true);
    } else {
      $("#phnoWarn").html("");
      $("#phnoWarn").hide();
      $(".next").attr("disabled", false);
    }
    checkVal1();
});

$("#email").keydown(() => {
    if (validateEmail($("#email").val())) {
        $("#emailWarn").html("");
        $("#emailWarn").hide();
        $(".next").attr("disabled", true);
    } else {
        $("#emailWarn").html("Enter valid email address.");
        $("#emailWarn").show();
        $(".next").attr("disabled", false);
    }
    checkVal1();
  });

  $("#address").keydown(() => {
    if ($("#address").val().length <= 8) {
      $("#addrWarn").html("Enter the address of length 10");
      $("#addrWarn").show();
      $(".next").attr("disabled", true);
    } else {
      $("#addrWarn").html("");
      $("#addrWarn").hide();
      $(".next").attr("disabled", true);
    }
    checkVal2();
  });

  $("#pincode").keydown(() => {
    if ($("#pincode").val().length !== 5) {
      $("#pincodWarn").html("Enter the pincode of length 6");
      $("#pincodWarn").show();
      $(".next").attr("disabled", true);;
    } else {
      $("#pincodWarn").html("");
      $("#pincodWarn").hide();
      $(".next").attr("disabled", true);
    }
    checkVal2();
  });

  $("#city").keydown(() => {
    if ($("#city").val().length < 2) {
      $("#cityWarn").html("Enter the city name of length  atleast 3");
      $("#cityWarn").show();
      $(".next").attr("disabled", true);
    } else {
      $("#cityWarn").html("");
      $("#cityWarn").hide();
      $(".next").attr("disabled", true);
    }
    checkVal2();
  });

  $("#state").keydown(() => {
    if ($("#state").val().length < 2) {
      $("#stateWarn").html("Enter the state name of length  atleast 3");
      $("#stateWarn").show();
      $(".next").attr("disabled", true);
    } else {
      $("#stateWarn").html("");
      $("#stateWarn").hide();
      $(".next").attr("disabled", true);
    }
    checkVal2();
  });

  $("#cardno").keydown(() => {
    if ($("#cardno").val().length !== 15) {
      $("#cardWarn").html("Enter the card no of length  atleast 16 digit");
      $("#cardWarn").show();
      $(".next").attr("disabled", true);
    } else {
      $("#cardWarn").html("");
      $("#cardWarn").hide();
      $(".next").attr("disabled", true);
    }
    checkVal3();
  });

  $("#month").keydown(() => {
    if ($("#month").val().length < 1 && $("#month").val() <= 12) {
      $("#monWarn").html("Enter a valid month");
      $("#monWarn").show();
      $(".next").attr("disabled", true);
    } else {
      $("#monWarn").html("");
      $("#monWarn").hide();
      $(".next").attr("disabled", true);
    }
    checkVal3();
  });

  $("#year").keydown(() => {
    if ($("#year").val().length !== 3 && $("#year").val() >= 2022) {
      $("#yearWarn").html("Enter a valid Year");
      $("#yearWarn").show();
      $(".next").attr("disabled", true);
    } else {
      $("#yearWarn").html("");
      $("#yearWarn").hide();
      $(".next").attr("disabled", true);
    }
    checkVal3();
  });

  $("#cvv").keydown(() => {
    if ($("#cvv").val().length !== 2) {
      $("#cvvWarn").html("Enter a cvv of length 3 only.");
      $("#cvvWarn").show();
      $(".next").attr("disabled", true);
    } else {
      $("#cvvWarn").html("");
      $("#cvvWarn").hide();
      $(".next").attr("disabled", true);
    }
    checkVal3();
  });

  $(".next").click(function () {
    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //Add Class Active
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: "none",
            position: "relative",
          });
          next_fs.css({ opacity: opacity });
        },
        duration: 500,
      }
    );
    setProgressBar(++current);
  });

  $(".previous").click(function () {
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li")
      .eq($("fieldset").index(current_fs))
      .removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate(
      { opacity: 0 },
      {
        step: function (now) {
          // for making fielset appear animation
          opacity = 1 - now;

          current_fs.css({
            display: "none",
            position: "relative",
          });
          previous_fs.css({ opacity: opacity });
        },
        duration: 500,
      }
    );
    setProgressBar(--current);
  });

  function setProgressBar(curStep) {
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar").css("width", percent + "%");
  }

  $(".submit").click(function () {
    return false;
  });
});
