function resetInput() {
    document.getElementById('name').value="";
    document.getElementById('Radio').checked="";
    document.getElementById('Radio2').checked="";
    document.getElementById('description').value="";
    document.getElementById('facebook').value="";
    document.getElementById('linkedin').value="";
    document.getElementById('twitter').value="";
    document.getElementById('submit-button').innerHTML="اضافة بيانات الموظف";
    document.getElementById('card-header').classList.remove('card-header-warning');
    document.getElementById('card-header').classList.add('card-header-success');
    elementSameClass= document.getElementsByClassName('check');
    for (let item of elementSameClass) {
      item.classList.add('btn-success');
      item.classList.remove('btn-warning');
      }
    var url= window.location.href;
    document.getElementById('cancel').remove();
    document.getElementById('card-form').action=url;
   
  }


  function show(app,index) {
    var url= window.location.href;
    document.getElementById('name').value=app[index]['name'];
    document.getElementById('Radio').checked=app[index]['titel']=='مدير' ? true :false;
    document.getElementById('Radio2').checked=app[index]['titel']=='موظف' ? true :false;
    document.getElementById('description').value=app[index]['description'];
    document.getElementById('facebook').value=app[index]['facebook'];
    document.getElementById('linkedin').value=app[index]['linkedin'];
    document.getElementById('twitter').value=app[index]['twitter'];
    document.getElementById('submit-button').innerHTML="تعديل بيانات الموظف";
    document.getElementById('card-header').classList.remove('card-header-success');
    document.getElementById('card-header').classList.add('card-header-warning');
    
    
    elementSameClass= document.getElementsByClassName('check');
    for (let item of elementSameClass) {
      item.classList.remove('btn-success');
      item.classList.add('btn-warning');
    }
    var form =document.getElementById('card-form');
    form.action=url+"/"+app[index]['id']+"/edit";

    if (document.getElementById('cancel') != null) { 
           document.getElementById('cancel').remove();
        }
    var cancel=  document.createElement('button');
    cancel.classList.add('btn');
    cancel.classList.add('btn-danger');
    cancel.innerHTML="الغاء";
    cancel.id="cancel";
    cancel.type="button";
    cancel.addEventListener("click",function() {
      resetInput();
    });
    form.appendChild(cancel);
  }
 
  function deletee(id) {
              
              document.getElementById("delete"+id).submit();
  }