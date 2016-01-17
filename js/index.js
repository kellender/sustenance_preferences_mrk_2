$(function() {
  $('.sign-up').submit(function(e) {
    e.preventDefault();

    var business = $('.reg-business').val();
    var email = $('.reg-email').val();
    var password = $('.reg-password').val();
    var passwordc = $('.reg-passwordc').val();

    if (business && email && password && passwordc && password == passwordc) {
      var postData = {name: business,
        email: email,
        password: password};

      $.ajax({
        url: "api/create_business.php",
        type: "POST",
        data: postData,
        success: function(data) {
          if (data == "success") {
            window.scrollTo(0, 0);
            location.reload();
          } else {
            alert("Email already in use");
          }
        }
      });
    }

  });

});
