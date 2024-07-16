<!DOCTYPE html> 
<html> 

    <head> 
        <title>toggle switch</title> 

        <style> 
            h1 { 
                color: green; 
            } 

            /* toggle in label designing */ 
            .toggle { 
                position : relative ; 
                display : inline-block; 
                width : 100px; 
                height : 52px; 
                background-color: red; 
                border-radius: 30px; 
                border: 2px solid gray; 
            } 

            /* After slide changes */ 
            .toggle:after { 
                content: ''; 
                position: absolute; 
                width: 50px; 
                height: 50px; 
                border-radius: 50%; 
                background-color: gray; 
                top: 1px;  
                left: 1px; 
                transition:  all 0.5s; 
            } 

            /* Toggle text */ 
            p { 
                font-family: Arial, Helvetica, sans-serif; 
                font-weight: bold; 
            } 

            /* Checkbox cheked effect */ 
            .checkbox:checked + .toggle::after { 
                left : 49px;  
            } 

            /* Checkbox cheked toggle label bg color */ 
            .checkbox:checked + .toggle { 
                background-color: green; 
            } 

            /* Checkbox vanished */ 
            .checkbox {  
                display : none; 
            } 
        </style> 
        <script type="text/javascript" src="/ewanlocal/assets/js/jquery.min.js"></script>
        <script src="/ewanlocal/assets/libs/axios/axios.js"></script>
        <script src="/ewanlocal/assets/libs/axios/es6-promise.js"></script>
        <script>
            $(document).ready(function () {
                var switchStatus = false;
                $("#switch").on('change', function () {
                    if ($(this).is(':checked')) {
                        switchStatus = $(this).is(':checked');
                       let data = new FormData();
                        data.append('ajax', 1);
                        data.append('reqType', 'languageChnage');
                        data.append('lang', "eng");
                        axios.post('/ewanlocal/language/lang/eng', data).then(function (res) {
//                            console.log(res.data.length);
                           if(res.data.length >0){
                              location.href = '/ewan/dashboard';
                           }else{;
                              $('#invalidError').show();
                           }

                        });
                    } else {
                        switchStatus = $(this).is(':checked');
                         alert("false");
                        alert(switchStatus);// To verify
                    }
                });
            });
        </script>
    </head> 

    <body> 
    <center> 
       
        <input type="checkbox" id="switch"
               class="checkbox" /> 
        <label for="switch" class="toggle"> 
            <p>OFF    ON</p> 
        </label> 
    </center> 
</body> 

</html> 