<{*<head>*}>
    <title>Demo</title>
    <script type='text/javascript'
        src='http://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js'>
    </script>
    <script type='text/javascript' src='demo_js.js'> </script>
    <{*<script type='text/javascript' src="<{$xoops_url}>/modules/ajaxsmarty/demo_js.js"></script>*}>
<script type="text/javascript">
$( document ).ajaxComplete(function( event,request, settings ) {
$( "#msg" ).append( "<li>Request Complete.</li>" );
});
</script>

<{*</head>*}>
<{*<body>*}>
<{*-------------------start -----------------*}>
<div id='demo_div'>

        <{*<{include file='db:demo_form.tpl'}>*}>
        <{$output}>

    </div>
<{*--------------------- end ----------------*}>
<{*</body>*}>

