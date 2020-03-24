$(document).ready(function(){

   

    //DeleteUsers
    $(document).on("click",".deleteUser",function(){
        var idUser = $(this).data("id");
          console.log(idUser);
          $.ajax({
            url: "/admin/idUser/" + idUser,
            method: 'GET',
            dataType: 'json',
            success: function(data){
                console.log(data);
              displayUsers(data);
            },
            error: function(xhr,status,msg){
                console.log(xhr);
            }
          });
          
    function displayUsers(users){
        let ispisUsers = "";
        for(let user of users['data']){
            ispisUsers+=`
            <tr>
            <td>${user.ime}</td>
            <td>${user.prezime}</td>
            <td>${user.email}</td>
            <td>${user.username}</td>
            <td>${user.naziv}</td>
            <td><a href="#" class="btn btn-primary">Edit</a></td>
            <td><input type="button" value="Delete" data-id="${user.idKorisnik}" class="btn btn-danger deleteUser"/></td>
          </tr>
            `;
        }
        $("#printUsers").html(ispisUsers);
    }
        });
        // END DeleteUsers

    //DeleteDestinations
    $(document).on("click",".deleteDestination",function(){
        var idDest = $(this).data("id");
          console.log(idDest);
          $.ajax({
            url: "/admin/idDestination/" + idDest,
            method: 'GET',
            dataType: 'json',
            success: function(data){
                console.log(data);
                displayDestinations(data);
            },
            error: function(xhr,status,msg){
                console.log(xhr);
            }
          });
          
    function displayDestinations(destinations){
        let ispisDest = "";
        for(let dest of destinations['data']){
            ispisDest+=`
            <tr>
            <td>${dest.idProizvoda}</td>
            <td>${dest.naziv}</td>
            <td>${dest.alt}</td>
            <td>${dest.cena}</td>
            <td><a href="#" class="btn btn-primary">Edit</a></td>
            <td><input type="button" value="Delete" data-id="${dest.idProizvoda}" class="btn btn-danger deleteDestination"/></td>
          </tr>
            `;
        }
        $("#printDestinations").html(ispisDest);
    }
        });

    //END DELETE DESTINATIONS


    //DELETE QUESTIONS 
    $(document).on("click",".deleteQuestion",function(){
        var idQuestion = $(this).data("id");
          console.log(idQuestion);
          $.ajax({
            url: "/admin/idQuestion/" + idQuestion,
            method: 'GET',
            dataType: 'json',
            success: function(data){
                console.log(data);
                displayQuestions(data);
            },
            error: function(xhr,status,msg){
                console.log(xhr);
            }
          });
          
    function displayQuestions(questions){
        let ispisQuestion = "";
        for(let quest of questions['data']){
            ispisQuestion+=`
            <tr>
            <td>${quest.imeKorisnika}</td>
            <td>${quest.prezimeKorisnika}</td>
            <td>${quest.pitanje}</td>
            <td>${quest.emailKorisnika}</td>
            <td>${quest.datum}</td>
            <td><input type="button" value="Delete" data-id="${quest.idKontakt}" class="btn btn-danger deleteQuestion"/></td>
          </tr>
            `;
        }
        $("#printQuestions").html(ispisQuestion);
    }
        });

    //END DELETE QUESTIONS
    //DELETE EXPERIANCES 
    $(document).on("click",".deleteExperiance",function(){
        var idExp = $(this).data("id");
          console.log(idExp);
          $.ajax({
            url: "/admin/idExperiance/" + idExp,
            method: 'GET',
            dataType: 'json',
            success: function(data){
                console.log(data);
                displayExperiances(data);
            },
            error: function(xhr,status,msg){
                console.log(xhr);
            }
          });
          
    function displayExperiances(experiances){
        let ispisExp = "";
        for(let exp of experiances['data']){
            ispisExp+=`
            <tr>
            <td>${exp.ime}</td>
            <td>${exp.email}</td>
            <td>${exp.tekstIskustva}</td>
            <td>${exp.naziv}</td>
            <td>${exp.datum}</td>
            <td><input type="button" value="Delete" data-id="${exp.idIskustva}" class="btn btn-danger deleteExperiance"/></td>
          </tr>
            `;
        }
        $("#printExperiances").html(ispisExp);
    }
        });

    //END DELETE EXPERIANCES
    //DELETE ACTIVITY FOR USERS AND ADMINS 
    $(document).on("click",".deleteActivity",function(){
        var idActivity = $(this).data("id");
          console.log(idActivity);
          $.ajax({
            url: "/admin/idActivity/" + idActivity,
            method: 'GET',
            dataType: 'json',
            success: function(data){
                console.log(data);
                displayActivity(data);
            },
            error: function(xhr,status,msg){
                console.log(xhr);
            }
          });
          
    function displayActivity(activity){
        let ispisActivity = "";
        for(let act of activity['data']){
            ispisActivity+=`
            <tr>
            <td>${act.ime}</td>
            <td>${act.prezime}</td>
            <td>${act.nazivAktivnosti}</td>
            <td>${act.datum} ${act.vreme}</td>
            <td><input type="button" value="Delete" data-id="${act.idAktivnost}" class="btn btn-danger deleteActivity"/></td>
          </tr>
            `;
        }
        $("#printActivity").html(ispisActivity);
    }
        });

    //END DELETE ACTIVITY FOR USERS AND ADDMINS

    //DATE OF ACTIVITY FILTER
    $(document).on("change","#dateOfActivity",function(){
        var date = $("#dateOfActivity").val();
          console.log(date);
           $.ajax({
            url: "/admin/activity/date/" + date,
            method: 'GET',
            dataType: 'json',
            success: function(data){
                console.log(data);
                displayDateActivity(data);
            },
            error: function(xhr,status,msg){
                 console.log(xhr);
             }
           });

           function displayDateActivity(dateOfActivity){
               ispisDateAct = "";
               for(let d of dateOfActivity['data']){
                   ispisDateAct+=`
                   <tr>
                   <td>${d.ime}</td>
                   <td>${d.prezime}</td>
                   <td>${d.nazivAktivnosti}</td>
                   <td>${d.datum} ${d.vreme}</td>
                   <td><input type="button" value="Delete" data-id="${d.idAktivnost}" class="btn btn-danger deleteActivity"/></td>
                 </tr>
                   `;
               }
               $("#printActivity").html(ispisDateAct);
           }
        });
    //END DATE OF ACTIVITY FILTER



});
   
      

    


    function provera(){
        
            var ime = document.getElementById("ime").value;
            var prezime = document.getElementById("prezime").value;
            var email = document.getElementById("email").value;
            var korisnicko = document.getElementById("username").value;
            var sifra = document.getElementById("password").value;
            var radioB = document.getElementsByName("pol");
            var vrednost = "";
            for(var i = 0; i<radioB.length; i++){
                if(radioB[i].checked){
                    vrednost = radioB[i].value;
                    break;
                }
            }
            var reIme = /^[A-Z][a-z]{2,11}$/;
            var rePrezime = /^([A-Z][a-z]{2,15})+$/;
            var reEmail = /^\b[\w.-]+@[\w.-]+(\.[\w.-]+)*\.[A-Za-z]{2,4}\b$/;
            var reKorisnicko = /^[A-z]{4,16}[\d]+$/;
            var reSifra = /^[a-z]{4,16}[\d]+$/;
    
            var nizGreske = [];
            if(!reIme.test(ime)){
                var errIme = document.getElementById("errIme");
                errIme.innerHTML = "Please enter the correct name!";
                errIme.style.color = "#ff0000";
                errIme.style.fontSize = "15px";
                nizGreske.push(ime);
            }
            else{
                var errIme = document.getElementById("errIme");
                errIme.innerHTML = "";

                document.getElementById("ime").style.border = "1px solid green";
            }
            if(!rePrezime.test(prezime)){
                var errPrezime = document.getElementById("errPrezime");
                errPrezime.innerHTML = "Please enter the correct last name!";
                errPrezime.style.color = "#ff0000";
                errPrezime.style.fontSize = "15px";
                nizGreske.push(prezime);
            }
            else{
                var errPrezime = document.getElementById("errPrezime");
                errPrezime.innerHTML = "";
                document.getElementById("prezime").style.border = "1px solid green";
            }
            if(!reEmail.test(email)){
                var errEmail = document.getElementById("errEmail");
                errEmail.innerHTML = "Please enter the correct email!";
                errEmail.style.color = "#ff0000";
                errEmail.style.fontSize = "15px";
                nizGreske.push(email);
            }
            else{
                var errEmail = document.getElementById("errEmail");
                errEmail.innerHTML = "";
                document.getElementById("email").style.border = "1px solid green";
            }
            if(!reKorisnicko.test(korisnicko)){
                var errUser = document.getElementById("errUser");
                errUser.innerHTML = "Please enter the correct username!!";
                errUser.style.color = "#ff0000";
                errUser.style.fontSize = "15px";
                nizGreske.push(korisnicko);
            }
            else{
                var errUser = document.getElementById("errUser");
                errUser.innerHTML = "";
                document.getElementById("username").style.border = "1px solid green";
            }
            if(!reSifra.test(sifra)){
                var errPass = document.getElementById("errPass");
                errPass.innerHTML = "Please enter the correct password!";
                errPass.style.color = "#ff0000";
                errPass.style.fontSize = "15px";
                nizGreske.push(sifra);
            }
            else{
                var errPass = document.getElementById("errPass");
                errPass.innerHTML = "";
                document.getElementById("password").style.border = "1px solid green";
            }
          
            if(nizGreske.length == 0){
                return true;
            }
            else{
                return false;
            }
    }
    function proveraLogin(){
        var email = document.getElementById("email").value;
        var pass = document.getElementById("password").value;
        var reEmail = /^\b[\w.-]+@[\w.-]+(\.[\w.-]+)*\.[A-Za-z]{2,4}\b$/;
        var reSifra = /^[a-z]{4,16}[\d]+$/;
        var nizGreske = [];
        if(!reEmail.test(email)){
            var errEmail = document.getElementById("errEmail");
            errEmail.innerHTML = "Please enter the correct email!";
            errEmail.style.color = "#ff0000";
            errEmail.style.fontSize = "15px";
            nizGreske.push(email);
        }
        else{
            var errEmail = document.getElementById("errEmail");
            errEmail.innerHTML = "";
            document.getElementById("email").style.border = "1px solid green";
        }
        if(!reSifra.test(pass)){
            var errPass = document.getElementById("errPass");
            errPass.innerHTML = "Please enter the correct password!";
            errPass.style.color = "#ff0000";
            errPass.style.fontSize = "15px";
            nizGreske.push(pass);
        }
        else{
            var errPass = document.getElementById("errPass");
            errPass.innerHTML = "";
            document.getElementById("password").style.border = "1px solid green";
        }
        if(nizGreske.length == 0){
            return true;
        }
        else{
            return false;
        }
      

    }
    function myFunctionDest() {
        var x = document.getElementById("tabelaAdmin");
        x.style.display = "block";
        var y = document.getElementById("tabelaAdminUsers");
        var z = document.getElementById("tabelaAdminContact");
        var e = document.getElementById("tabelaAdminExperiances");
        var m = document.getElementById("tabelaAdminActivity")
        y.style.display = "none";
        z.style.display = "none";
        e.style.display = "none";
        m.style.display = "none";
      }
    function myFunctionUsers() {
        var x = document.getElementById("tabelaAdminUsers");
        x.style.display = "block";
        var y = document.getElementById("tabelaAdmin");
        var z = document.getElementById("tabelaAdminContact");
        var e = document.getElementById("tabelaAdminExperiances");
        var m = document.getElementById("tabelaAdminActivity")
        m.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        e.style.display = "none";
        }
        function myFunctionContact() {
        var x = document.getElementById("tabelaAdminContact");
        x.style.display = "block";
        var y = document.getElementById("tabelaAdmin");
        var z = document.getElementById("tabelaAdminUsers");
        var e = document.getElementById("tabelaAdminExperiances");
        var m = document.getElementById("tabelaAdminActivity")
        m.style.display = "none";
        y.style.display = "none";
        z.style.display = "none";
        e.style.display = "none";
        }
        function myFunctionExperiance() {
            var x = document.getElementById("tabelaAdminExperiances");
            x.style.display = "block";
            var y = document.getElementById("tabelaAdmin");
            var z = document.getElementById("tabelaAdminUsers");
            var e = document.getElementById("tabelaAdminContact");
            var m = document.getElementById("tabelaAdminActivity")
            m.style.display = "none";
            y.style.display = "none";
            z.style.display = "none";
            e.style.display = "none";
            }
            function myFunctionActivity() {
                var x = document.getElementById("tabelaAdminActivity");
                x.style.display = "block";
                var y = document.getElementById("tabelaAdmin");
                var z = document.getElementById("tabelaAdminUsers");
                var e = document.getElementById("tabelaAdminContact");
                var m = document.getElementById("tabelaAdminExperiances")
                y.style.display = "none";
                z.style.display = "none";
                e.style.display = "none";
                m.style.display = "none";
                }


    function newPasswordCheck(){
        var newPass = document.getElementById("newPass").value;
        var reNewPass = /^[a-z]{4,16}[\d]+$/;

        var nizGreske = [];
        if(!reNewPass.test(newPass)){
            var errNewPass = document.getElementById("errNewPass");
            errNewPass.innerHTML = "Please enter the correct password! Example: edward94";
            errNewPass.style.color = "#ff0000";
            errNewPass.style.fontSize = "15px";
            nizGreske.push(newPass);
        }
        else{
            var errNewPass = document.getElementById("errNewPass");
            errNewPass.innerHTML = "";

            document.getElementById("newPass").style.border = "1px solid green";
        }
       
        if(nizGreske.length == 0){
            return true;
        }
        else{
            return false;
        }


    }
    

       

        
            
        
     

