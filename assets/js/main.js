$(document)
.on("submit", "form.js-register", function(event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);

    var dataObj = {
        username: $("input[type='text']", _form).val(),
        password: $("input[type='password']", _form).val()
    }

    if(dataObj.username.length < 6) {
        _error.text("Username need more than 6 characters").show();
        return false;
    } else if (dataObj.password.length < 6) {
        _error.text("Password need more than 6 characters").show();
        return false;
    }

    // assuming the code gets this far, we can start the ajax process
    _error.hide();

    $.ajax({
        type: 'POST',
        url: '/ajax/register.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) {
        // return the data
        if(data.redirect !== undefined) {
            window.location = data.redirect;
        } else if(data.error !== undefined) {
            _error.text(data.error).show();
        }
    })
    .fail(function ajaxFailed(e) {
        // failed
    })
    .always(function ajaxAlwaysDoThis(data) {
        // always do
    })

    return false;
})
// LOGIN
$(document)
.on("submit", "form.js-login", function(event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);

    var dataObj = {
        username: $("input[type='text']", _form).val(),
        password: $("input[type='password']", _form).val()
    }

    if(dataObj.username.length < 6) {
        _error.text("Username need more than 6 characters").show();
        return false;
    } else if (dataObj.password.length < 6) {
        _error.text("Password need more than 6 characters").show();
        return false;
    }

    // assuming the code gets this far, we can start the ajax process
    _error.hide();

    $.ajax({
        type: 'POST',
        url: '/ajax/login.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })
    .done(function ajaxDone(data) {
        // return the data
        if(data.redirect !== undefined) {
            window.location = data.redirect;
        } else if(data.error !== undefined) {
            _error.html(data.error).show();
        }
    })
    .fail(function ajaxFailed(e) {
        // failed
    })
    .always(function ajaxAlwaysDoThis(data) {
        // always do
    })

    return false;
})