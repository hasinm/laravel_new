<html>

<head>
    <script>
        function myFunction() {

            text_box = document.getElementsByClassName('inputs');
            if (text_box[0].value == '' || text_box[1].value == '') {
                alert('please fill the fields');
            }
            elseif(isNaN(text_box[0].value) || isNaN(text_box[1].value)) {
                alert('Input must be a number');
            }
            else {
                result_element = document.createElement('input');

                result = Number(text_box[0].value) + Number(text_box[1].value);

                result_element.setAttribute('type', 'text');
                result_element.setAttribute('readonly', true);
                result_element.setAttribute('value', result);

                document.getElementsByTagName('div')[0].append(result_element);
            }
        }
    </script>
</head>

<body>
    <input type="text" id="num1" class="inputs">
    <input type="text" id="num2" class="inputs">
    <input type="button" value="Submit" onclick="myFunction()"><br><br>
    <div></div>

</body>

</html>