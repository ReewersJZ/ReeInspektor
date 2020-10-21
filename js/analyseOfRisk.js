
function CheckRadioAnalyse(RadioName, RadioName2, RadioName3)
{
    var RadioButtons = document.getElementsByName(RadioName);
    var RadioButtons2 = document.getElementsByName(RadioName2);
    var RadioButtons3 = document.getElementsByName(RadioName3);

    var summary = 0;

    for(i = 0; i < RadioButtons.length; i++)
    {
        if(RadioButtons[i].checked)
        {
            a = parseInt(RadioButtons[i].value, 10)
            summary = a; 
        }
    }

    for(i = 0; i < RadioButtons2.length; i++)
    {
        if(RadioButtons2[i].checked)
        {
            a = parseInt(RadioButtons2[i].value, 10)
            summary = summary + a;
        }
    }
    
    for(i = 0; i < RadioButtons3.length; i++)
    {
    if(RadioButtons3[i].checked)
        {
            a = parseInt(RadioButtons3[i].value, 10)
            summary = summary + a;
        }
    }

   
    if(summary == 3)
        {
            summary = "TAK";
            document.getElementById('comment').value = "Przejdź do oceny skutków";
            var buttonGoToNext = document.getElementById("buttonGoToNext");
            buttonGoToNext.style.display = "block";
        }
    else if (summary == 6)
        {
            summary = "TAK";
            document.getElementById('comment').value = "Przejdź do oceny skutków";
            var buttonGoToNext = document.getElementById("buttonGoToNext");
            buttonGoToNext.style.display = "block";
        }
    else if (summary == 9)
        {
            summary = "TAK";
            document.getElementById('comment').value = "Przejdź do oceny skutków";
            var buttonGoToNext = document.getElementById("buttonGoToNext");
            buttonGoToNext.style.display = "block";
        }
    else if (summary == 12)
        {
            summary = "NIE";
            document.getElementById('comment').value = "Przejdź do kolejnego kroku oceny";
            var comment = document.getElementById("comment");
            comment.style.display = "block";
            var buttonGoToNext = document.getElementById("buttonGoToNext");
            buttonGoToNext.style.display = "none";
        }
    else if (summary == 1)
        {
            alert('Uzupełnij wszystkie odpowiedzi i kliknij "sprawdź"');
        }
    else if (summary == 2)
        {
            alert('Uzupełnij wszystkie odpowiedzi i kliknij "sprawdź"');
        }
    else if (summary == 4)
        {
            alert('Uzupełnij wszystkie odpowiedzi i kliknij "sprawdź"');
        }
    else if (summary == 5)
        {
            alert('Uzupełnij wszystkie odpowiedzi i kliknij "sprawdź"');
        }
    else if (summary == 8)
        {
            alert('Uzupełnij wszystkie odpowiedzi i kliknij "sprawdź"');
        }
    else
    {
        alert('Uzupełnij wszystkie odpowiedzi i kliknij "sprawdź"');
    }
}


function CheckRadioAnalyse2(RadioName, RadioName2, RadioName3, RadioName4, RadioName5, RadioName6, RadioName7, RadioName8, RadioName9, RadioName10,
     RadioName11, RadioName12)
{
    var RadioButtons = document.getElementsByName(RadioName);
    var RadioButtons2 = document.getElementsByName(RadioName2);
    var RadioButtons3 = document.getElementsByName(RadioName3);
    var RadioButtons4 = document.getElementsByName(RadioName4);
    var RadioButtons5 = document.getElementsByName(RadioName5);
    var RadioButtons6 = document.getElementsByName(RadioName6);
    var RadioButtons7 = document.getElementsByName(RadioName7);
    var RadioButtons8 = document.getElementsByName(RadioName8);
    var RadioButtons9 = document.getElementsByName(RadioName9);
    var RadioButtons10 = document.getElementsByName(RadioName10);
    var RadioButtons11 = document.getElementsByName(RadioName11);
    var RadioButtons12 = document.getElementsByName(RadioName12);
    var listOfChcecked = [RadioButtons, RadioButtons2, RadioButtons3, RadioButtons4, RadioButtons5, RadioButtons6, RadioButtons7, RadioButtons8, 
                        RadioButtons9, RadioButtons10, RadioButtons11, RadioButtons12];

    var summary = 0;
    var noMarkedQuestionAll = 0;

    for (b=0; b < listOfChcecked.length; b++)
    {
        RadioButtons = listOfChcecked[b];
        var noMarkedQuestion = 0;

        for(i = 0; i < RadioButtons.length; i++)
        {
            var noMarked = 0;
            if(RadioButtons[i].checked)
            {
                a = parseInt(RadioButtons[i].value, 10)
                
                if (a == 1)
                {
                    summary = summary + 1;
                }
                else if (a == 2)
                {
                    summary = summary + 0;
                }
            }
            else
            {
                noMarked += 1;
            }

            noMarkedQuestion += noMarked;
        }
        noMarkedQuestionAll += noMarkedQuestion;
    }

    if (noMarkedQuestionAll > 12)
    {
        alert('Uzupełnij wszystkie odpowiedzi i kliknij "sprawdź"');
    }
    else
    {  
        if(summary >= 2)
            {
                summary = "TAK";
                document.getElementById('comment2').value = "Przejdź do oceny skutków";
                var buttonGoToNext = document.getElementById("buttonGoToNext2");
                buttonGoToNext.style.display = "block";
            }
        else if (summary < 2)
            {
                summary = "NIE";
                document.getElementById('comment2').value = "Przejdź do kolejnego kroku oceny";
                var comment = document.getElementById("comment2");
                comment.style.display = "block";
                var buttonGoToNext = document.getElementById("buttonGoToNext2");
                buttonGoToNext.style.display = "none";
            }
        else
            {
                alert('błąd');
            }
    }
}


function CheckRadioAnalyse3(RadioName, RadioName2, RadioName3, RadioName4, RadioName5, RadioName6, RadioName7, RadioName8, RadioName9, RadioName10,
    RadioName11, RadioName12, RadioName13, RadioName14, RadioName15, RadioName16, RadioName17, RadioName18, RadioName19, RadioName20, RadioName21)
{
   var RadioButtons = document.getElementsByName(RadioName);
   var RadioButtons2 = document.getElementsByName(RadioName2);
   var RadioButtons3 = document.getElementsByName(RadioName3);
   var RadioButtons4 = document.getElementsByName(RadioName4);
   var RadioButtons5 = document.getElementsByName(RadioName5);
   var RadioButtons6 = document.getElementsByName(RadioName6);
   var RadioButtons7 = document.getElementsByName(RadioName7);
   var RadioButtons8 = document.getElementsByName(RadioName8);
   var RadioButtons9 = document.getElementsByName(RadioName9);
   var RadioButtons10 = document.getElementsByName(RadioName10);
   var RadioButtons11 = document.getElementsByName(RadioName11);
   var RadioButtons12 = document.getElementsByName(RadioName12);
   var RadioButtons13 = document.getElementsByName(RadioName13);
   var RadioButtons14 = document.getElementsByName(RadioName14);
   var RadioButtons15 = document.getElementsByName(RadioName15);
   var RadioButtons16 = document.getElementsByName(RadioName16);
   var RadioButtons17 = document.getElementsByName(RadioName17);
   var RadioButtons18 = document.getElementsByName(RadioName18);
   var RadioButtons19 = document.getElementsByName(RadioName19);
   var RadioButtons20 = document.getElementsByName(RadioName20);
   var RadioButtons21 = document.getElementsByName(RadioName21);
   var listOfChcecked = [RadioButtons, RadioButtons2, RadioButtons3, RadioButtons4, RadioButtons5];
   var listOfChcecked2 = [RadioButtons6, RadioButtons7, RadioButtons8, RadioButtons9, RadioButtons10];
   var listOfChcecked3 = [RadioButtons11, RadioButtons12, RadioButtons13, RadioButtons14, RadioButtons15];
   var listOfChcecked4 = [RadioButtons16, RadioButtons17, RadioButtons18, RadioButtons19, RadioButtons20];

   var summary = 0;
   var summary2 = 0;
   var summary3 = 0;
   var summary4 = 0;

   var noMarkedQuestionAll = 0;

   for (b=0; b < listOfChcecked.length; b++)
   {
       RadioButtons = listOfChcecked[b];
       var noMarkedQuestion = 0;

       for(i = 0; i < RadioButtons.length; i++)
       {
           var noMarked = 0;
           if(RadioButtons[i].checked)
           {
               a = parseInt(RadioButtons[i].value, 10)
               
               if (a == 1)
               {
                   summary = summary + 1;
               }
               else if (a == 2)
               {
                   summary = summary + 0;
               }
           }
           else
           {
               noMarked += 1;
           }

           noMarkedQuestion += noMarked;
       }
       noMarkedQuestionAll += noMarkedQuestion;
   }

   for (c=0; c < listOfChcecked2.length; c++)
   {
       RadioButtons = listOfChcecked2[c];
       var noMarkedQuestion = 0;

       for(i = 0; i < RadioButtons.length; i++)
       {
           var noMarked = 0;
           if(RadioButtons[i].checked)
           {
               a = parseInt(RadioButtons[i].value, 10)
               
               if (a == 1)
               {
                   summary2 = summary2 + 1;
               }
               else if (a == 2)
               {
                   summary2 = summary2 + 0;
               }
           }
           else
           {
               noMarked += 1;
           }

           noMarkedQuestion += noMarked;
       }
       noMarkedQuestionAll += noMarkedQuestion;
   }

   for (d=0; d < listOfChcecked3.length; d++)
   {
       RadioButtons = listOfChcecked3[d];
       var noMarkedQuestion = 0;

       for(i = 0; i < RadioButtons.length; i++)
       {
           var noMarked = 0;
           if(RadioButtons[i].checked)
           {
               a = parseInt(RadioButtons[i].value, 10)
               
               if (a == 1)
               {
                   summary3 = summary3 + 1;
               }
               else if (a == 2)
               {
                   summary3 = summary3 + 0;
               }
           }
           else
           {
               noMarked += 1;
           }

           noMarkedQuestion += noMarked;
       }
       noMarkedQuestionAll += noMarkedQuestion;
   }

   for (e=0; e < listOfChcecked4.length; e++)
   {
       RadioButtons = listOfChcecked4[e];
       var noMarkedQuestion = 0;

       for(i = 0; i < RadioButtons.length; i++)
       {
           var noMarked = 0;
           if(RadioButtons[i].checked)
           {
               a = parseInt(RadioButtons[i].value, 10)
               
               if (a == 1)
               {
                   summary4 = summary4 + 1;
               }
               else if (a == 2)
               {
                   summary4 = summary4 + 0;
               }
           }
           else
           {
               noMarked += 1;
           }

           noMarkedQuestion += noMarked;
       }
       noMarkedQuestionAll += noMarkedQuestion;
   }

   var sumOfSummaryTable = [summary, summary2, summary3, summary4];
   var resultOfsumOfSummaryTable = [];

   if (noMarkedQuestionAll > 20)
   {
       alert('Uzupełnij wszystkie odpowiedzi kroku 2 i kliknij "Dokonaj analizy"');
   }
   else
   { 
       for (f=0; f < sumOfSummaryTable.length; f++)
       {
            if (sumOfSummaryTable[f] <= 1)
            {
                resultOfsummary = 1;
                resultOfsumOfSummaryTable.push(resultOfsummary);
            }
            else if (sumOfSummaryTable[f] == 2  || sumOfSummaryTable[f] == 3)
            {
                resultOfsummary = 2;
                resultOfsumOfSummaryTable.push(resultOfsummary);
            }

            else if (sumOfSummaryTable[f] == 4 || sumOfSummaryTable[f] == 5)
            {
                resultOfsummary = 3;
                resultOfsumOfSummaryTable.push(resultOfsummary);
            }
       }
   }

   var resultOfsumOfSummaryTableSum = resultOfsumOfSummaryTable[0] + resultOfsumOfSummaryTable[1] + resultOfsumOfSummaryTable[2] 
                                        + resultOfsumOfSummaryTable[3];
    
                                        
    //prawdopodobieństwo
    if (resultOfsumOfSummaryTableSum <= 5)
    {
        resultOfsumOfSummaryTableSumWord = "Niski";
    }
    else if (resultOfsumOfSummaryTableSum > 5 && resultOfsumOfSummaryTableSum <= 8)
    {
        resultOfsumOfSummaryTableSumWord = "Średni";
    }
    else if (resultOfsumOfSummaryTableSum >= 9)
    {
        resultOfsumOfSummaryTableSumWord = "Wysoki";
    }
    else
    {
        resultOfsumOfSummaryTableSumWord = "brak danych";
    }


    //poziom odziaływania
    var influenceWord = "";
    var noMarkedQuestion2 = 0;

    for(h = 0; h < RadioButtons21.length; h++)
    {
        var noMarked2 = 0;

        if(RadioButtons21[h].checked)
        {
            a = parseInt(RadioButtons21[h].value, 10);
            if (a == 1)
            {
                influenceWord = "Niski";
            }
            else if (a == 2)
            {
                influenceWord = "Średni";
            }
            else if (a == 3)
            {
                influenceWord = "Wysoki";
            }
            else if (a == 4)
            {
                influenceWord = "Bardzo wysoki";
            }
        }
        else
        {
            noMarked2 += 1;

        }
        noMarkedQuestion2 += noMarked2;

        if (noMarkedQuestion2 == 4)
        {   
            influenceWord = "brak danych";
            alert('Uzupełnij wszystkie odpowiedzi kroku 3 i kliknij "Dokonaj analizy"');
        }

    }
    

    if (resultOfsumOfSummaryTableSumWord == "Niski" && influenceWord == "Niski")
    {
        resultOfAnalyse = "Niskie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Niski" && influenceWord == "Średni")
    {
        resultOfAnalyse = "Średnie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Niski" && influenceWord == "Wysoki")
    {
        resultOfAnalyse = "Wysokie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Niski" && influenceWord == "Bardzo wysoki")
    {
        resultOfAnalyse = "Wysokie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Średni" && influenceWord == "Niski")
    {
        resultOfAnalyse = "Niskie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Średni" && influenceWord == "Średni")
    {
        resultOfAnalyse = "Średnie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Średni" && influenceWord == "Wysoki")
    {
        resultOfAnalyse = "Wysokie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Średni" && influenceWord == "Bardzo wysoki")
    {
        resultOfAnalyse = "Wysokie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Wysoki" && influenceWord == "Niski")
    {
        resultOfAnalyse = "Średnie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Wysoki" && influenceWord == "Średni")
    {
        resultOfAnalyse = "Wysokie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Wysoki" && influenceWord == "Wysoki")
    {
        resultOfAnalyse = "Wysokie";
    }
    else if (resultOfsumOfSummaryTableSumWord == "Wysoki" && influenceWord == "Bardzo wysoki")
    {
        resultOfAnalyse = "Wysokie";
    }


    //reakcja na ryzyko

    if (resultOfAnalyse == "Niskie")
    {
        reaction = "Akceptacja";
        var finalButton = document.getElementById("finalButton");
        finalButton.style.display = "block";

    }
    else if (resultOfAnalyse == "Średnie")
    {
        var labelOf3step = document.getElementById("labelOf3step");
        labelOf3step.style.display = "block";
        var redukcja = document.getElementById("redukcja");
        redukcja.style.display = "block";
        var przeniesienie = document.getElementById("przeniesienie");
        przeniesienie.style.display = "block";
        var zatwierdzWybor = document.getElementById("zatwierdzWybor");
        zatwierdzWybor.style.display = "block";
        var unikanie = document.getElementById("unikanie");
        unikanie.style.display = "none";
        reaction = "";
        var finalButton = document.getElementById("finalButton");
        finalButton.style.display = "none";
    }
    else if (resultOfAnalyse == "Wysokie")
    {
        var labelOf3step = document.getElementById("labelOf3step");
        labelOf3step.style.display = "block";
        var redukcja = document.getElementById("redukcja");
        redukcja.style.display = "block";
        var przeniesienie = document.getElementById("przeniesienie");
        przeniesienie.style.display = "block";
        var unikanie = document.getElementById("unikanie");
        unikanie.style.display = "block";
        var zatwierdzWybor = document.getElementById("zatwierdzWybor");
        zatwierdzWybor.style.display = "block";
        reaction = "";
        var finalButton = document.getElementById("finalButton");
        finalButton.style.display = "none";
    }
    else{
        reaction = "błąd";
    }



    document.getElementById('probability').value = resultOfsumOfSummaryTable[0];
    document.getElementById('probability2').value = resultOfsumOfSummaryTable[1];
    document.getElementById('probability3').value = resultOfsumOfSummaryTable[2];
    document.getElementById('probability4').value = resultOfsumOfSummaryTable[3];
    document.getElementById('probabilitySumAmount').value = resultOfsumOfSummaryTableSum;
    document.getElementById('probabilitySum').value = resultOfsumOfSummaryTableSumWord;
    document.getElementById('probabilitySum2').value = resultOfsumOfSummaryTableSumWord;
    document.getElementById('influence').value = influenceWord;
    document.getElementById('resultOfAnalyse').value = resultOfAnalyse;
    document.getElementById('reaction').value = reaction;
    var czynnoscPrzetw = document.getElementById('czynnoscPrzetw').value
    document.getElementById('czynnoscPrzetwarzania').value = czynnoscPrzetw;
    var dataczynnoscPrzetw = document.getElementById('dataczynnoscPrzetw').value
    document.getElementById('dataDlaczynnoscPrzetwarzania').value = dataczynnoscPrzetw;

    


    //window.open('analizaRyzykaRaport.php');

    if (resultOfsumOfSummaryTableSumWord != "brak danych" && influenceWord != "brak danych")
    {
        document.getElementById('comment3').value = "Przejdź do kolejnego etapu";
        var wynikiAnalizyUkryte = document.getElementById("wynikiAnalizyUkryte");
        wynikiAnalizyUkryte.style.display = "block";
    }

}


function CheckRadioAnalyse4(RadioName){

    var RadioButtons = document.getElementsByName(RadioName);
    var komentary = 0;

    for(g = 0; g < RadioButtons.length; g++)
    {
    if(RadioButtons[g].checked)
        {
            a = parseInt(RadioButtons[g].value, 10);
               
            if(a == 2)
            {
                document.getElementById('reaction').value = "Redukcja";
                var labelOf3step = document.getElementById("labelOf3step");
                labelOf3step.style.display = "none";
                var redukcja = document.getElementById("redukcja");
                redukcja.style.display = "none";
                var przeniesienie = document.getElementById("przeniesienie");
                przeniesienie.style.display = "none";
                var unikanie = document.getElementById("unikanie");
                unikanie.style.display = "none";
                var zatwierdzWybor = document.getElementById("zatwierdzWybor");
                zatwierdzWybor.style.display = "none";
                var finalButton = document.getElementById("finalButton");
                finalButton.style.display = "block";
            }
            else if (a == 3)
                {
                    document.getElementById('reaction').value = "Przeniesienie";
                    var labelOf3step = document.getElementById("labelOf3step");
                    labelOf3step.style.display = "none";
                    var redukcja = document.getElementById("redukcja");
                    redukcja.style.display = "none";
                    var przeniesienie = document.getElementById("przeniesienie");
                    przeniesienie.style.display = "none";
                    var unikanie = document.getElementById("unikanie");
                    unikanie.style.display = "none";
                    var zatwierdzWybor = document.getElementById("zatwierdzWybor");
                    zatwierdzWybor.style.display = "none";
                    var finalButton = document.getElementById("finalButton");
                    finalButton.style.display = "block";
                }
            else if (a == 4)
                {
                    document.getElementById('reaction').value = "Unikanie";
                    var labelOf3step = document.getElementById("labelOf3step");
                    labelOf3step.style.display = "none";
                    var redukcja = document.getElementById("redukcja");
                    redukcja.style.display = "none";
                    var przeniesienie = document.getElementById("przeniesienie");
                    przeniesienie.style.display = "none";
                    var unikanie = document.getElementById("unikanie");
                    unikanie.style.display = "none";
                    var zatwierdzWybor = document.getElementById("zatwierdzWybor");
                    zatwierdzWybor.style.display = "none";
                    var finalButton = document.getElementById("finalButton");
                    finalButton.style.display = "block";
                }
        }
        else
        {
            komentary += 1;
        }
    }

    if (komentary > 3)
    {
        alert('Uzupełnij odpowiedz kroku 3 i kliknij "Wybierz"');
    }

}

function ukryj()
{
    var buttonNonPrint = document.getElementById('wynikiAnalizyUkryteRaportPrzycisk');
    buttonNonPrint.style.display = "none";
    var buttonNonPrintAction = document.getElementById('wynikiAnalizyUkryteRaportPrzyciskAction');
    buttonNonPrintAction.style.display = "none";
}
