
function CheckRadio(RadioName, RadioName2, RadioName3, RadioName4, RadioName5)
{
    var RadioButtons = document.getElementsByName(RadioName);
    var RadioButtons2 = document.getElementsByName(RadioName2);
    var RadioButtons3 = document.getElementsByName(RadioName3);
    var RadioButtons4 = document.getElementsByName(RadioName4);
    var RadioButtons5 = document.getElementsByName(RadioName5);
    var summary = 0;
    for(i = 0; i < RadioButtons.length; i++)
    {
        if(RadioButtons[i].checked)
        {
            a = parseInt(RadioButtons[i].value, 10)
            summary = a;
            if (a == 1){
                var exampleRadios1label = document.getElementById("exampleRadios1label");
                exampleRadios1label.style.color = "green";
                exampleRadios1label.style.fontWeight = "bold";
            }
            else{
                var exampleRadios1label = document.getElementById("exampleRadios1label");
                exampleRadios1label.style.color = "black";
                exampleRadios1label.style.fontWeight = "300";
            }
        }
    }

    for(i = 0; i < RadioButtons2.length; i++)
    {
        if(RadioButtons2[i].checked)
        {
            a = parseInt(RadioButtons2[i].value, 10)
            summary = summary + a;
            if (a == 1){
                var exampleRadios4label = document.getElementById("exampleRadios4label");
                exampleRadios4label.style.color = "green";
                exampleRadios4label.style.fontWeight = "bold";
            }
            else{
                var exampleRadios4label = document.getElementById("exampleRadios4label");
                exampleRadios4label.style.color = "black";
                exampleRadios4label.style.fontWeight = "300";
            }
        }
    }
    
    for(i = 0; i < RadioButtons3.length; i++)
    {
    if(RadioButtons3[i].checked)
        {
            a = parseInt(RadioButtons3[i].value, 10)
            summary = summary + a;
            if (a == 1){
                var exampleRadios7label = document.getElementById("exampleRadios7label");
                exampleRadios7label.style.color = "green";
                exampleRadios7label.style.fontWeight = "bold";
            }
            else{
                var exampleRadios7label = document.getElementById("exampleRadios7label");
                exampleRadios7label.style.color = "black";
                exampleRadios7label.style.fontWeight = "300";
            }
        }
    }

    for(i = 0; i < RadioButtons4.length; i++)
    {
    if(RadioButtons4[i].checked)
        {
            a = parseInt(RadioButtons4[i].value, 10)
            summary = summary + a;
            if (a == 1){
                var exampleRadios12label = document.getElementById("exampleRadios12label");
                exampleRadios12label.style.color = "green";
                exampleRadios12label.style.fontWeight = "bold";
            }
            else{
                var exampleRadios12label = document.getElementById("exampleRadios12label");
                exampleRadios12label.style.color = "black";
                exampleRadios12label.style.fontWeight = "300";
            }
        }
    }

    for(i = 0; i < RadioButtons5.length; i++)
    {
    if(RadioButtons5[i].checked)
        {
            a = parseInt(RadioButtons5[i].value, 10)
            summary = summary + a;
            if (a == 1){
                var exampleRadios15label = document.getElementById("exampleRadios15label");
                exampleRadios15label.style.color = "green";
                exampleRadios15label.style.fontWeight = "bold";
            }
            else{
                var exampleRadios15label = document.getElementById("exampleRadios15label");
                exampleRadios15label.style.color = "black";
                exampleRadios15label.style.fontWeight = "300";
            }
        }
    }

    if(summary == 5)
        {
            summary = "100%";
        }
    else if (summary == 4)
        {
            summary = "80%";
        }
    else if (summary == 3)
        {
            summary = "60%";
            alert("Aby zaliczyć test należy osiągnąć minimum 80%");
        }
    else if (summary == 2)
        {
            summary = "40%";
            alert("Aby zaliczyć test należy osiągnąć minimum 80%");
        }
    else if (summary == 1)
        {
            summary = "20%";
            alert("Aby zaliczyć test należy osiągnąć minimum 80%");
        }
    else
        {
            summary = "0%";
            alert("Aby zaliczyć test należy osiągnąć minimum 80%");
        }


    document.getElementById('Answer').value = summary;
    document.getElementById('ResultOfTest').value = summary;

    if (summary == "80%" || summary == "100%"){

        var if80showDiv = document.getElementById("if80showDiv");
        if80showDiv.style.display = "block";
    }
    else{
        var if80showDiv = document.getElementById("if80showDiv");
        if80showDiv.style.display = "none";
    }

}

function checkIfProperlyFilled(imie1, nazwisko1, data1)
{
    var imie = document.getElementById(imie1).value;
    var nazwisko = document.getElementById(nazwisko1).value;
    var data = document.getElementById(data1).value;


    if (imie == "" || nazwisko == "" || data == "")
    {
        alert("Nie wszystkie wymagane pola formularza są wypełnione");
    }
    else
    {
        alert('Dziękujemy! Dane wprowadzone poprawnie.');
        document.getElementById('formToSubmit').submit();
    }
}

