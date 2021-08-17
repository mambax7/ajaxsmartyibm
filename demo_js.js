function submitDemoForm() {
    var form = $("form[name=demo_form]");
    event.preventDefault();
    $.ajax({
        type: "POST",
        url: form.action ? form.action : document.URL,
        data: $(form).serialize(),
        dataType: "text",
        beforeSend: function(xhr) {
            //alert(form);
            //alert(form.action);
            //alert(document.URL);
            //alert($(form).serialize());
            xhr.setRequestHeader("Ajax-Request", "true");
        },
        success: function(response) {
            //alert(response);
            //alert(form);
            //$("#demo_div").html(response);
            $("body").html(response);

        }
    });
    return false;
}

