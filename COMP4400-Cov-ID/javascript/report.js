const valTxt= /^\w+[a-z]/i;
const valNum = /^\w+[0-9]/g;
const valEmail = /^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/;
const valImg = /\.(jpg|png)/i;

function php_Select(){
    var resultOK = nameVal();
    alert("resultOK1:" + resultOK);
    if(!resultOK){
        resultOK = false;
    }
    else {
        // Get data from form
        alert("lol");
        var data = new FormData();
        data.append("fullname", document.getElementById("fullname").value);

        // ajax call
        var xhr = new XMLHttpRequest();

        // xhr.open('POST', something something)
        xhr.open('POST','../includes/db_select.inc.php');

        xhr.onload = function() {
            console.log(this.response);

            let select_result = this.response;

            if(select_result != false){
                const arrayFieldsValue = JSON.parse(select_result);

                document.getElementById("fullname").value = arrayFieldsValue["usersname"];
                document.getElementById("email").value = arrayFieldsValue["usersemail"];

                msg = "Record selected successfully";
                document.getElementById("modalMsg").innerHTML = msg;
                $('#warningModal').modal('show');
            }
        };
    }
}

function nameVal(){
    fieldName = 'Name';
    fieldValue = document.forms["dashboard"]["fullname"].value;
    resultVal = fieldVal(fieldName, fieldValue)
    if(resultVal){
        resultVal = verifyNameFormat(fieldValue);
    }
    return resultVal;
}

function fieldVal(fieldName, fieldValue){
    if (fieldValue == null || fieldValue == "") {
        message = fieldName + " field is empty!!!";
        alert(message);
        //document.getElementById("modalMsg").innerHTML = message;
        //$('#warningModal').modal('show');
        return false;
    }
    else{
        return true;
    }
}

function verifyNameFormat(name){
    if(name.match(valTxt)){
        return true;
    }
    else{
        alert("Invalid name format!!!");
        return false;
    }
}