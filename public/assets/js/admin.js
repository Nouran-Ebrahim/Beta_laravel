function subForm(){
    const form=document.getElementById('sub-form');
    form.style.display ='block';
}

function edit(lesson,unit){
    console.log(lesson,unit);
    const id_link =lesson+'.'+unit;
    const id_edit ='edit.'+lesson+'.'+unit;
    const id_save ='save.'+lesson+'.'+unit;
    const id_delet ='delet.'+lesson+'.'+unit;
    const id_cancel ='cancel.'+lesson+'.'+unit;

    const link=document.getElementById(id_link);
    const edit_btn=document.getElementById(id_edit);
    const save_btn=document.getElementById(id_save);
    const del_btn=document.getElementById(id_delet);
    const cancel_btn=document.getElementById(id_cancel);
    
    link.style.display ='block';
    edit_btn.style.display ='none';
    save_btn.style.display ='block';
    del_btn.style.display ='none';
    cancel_btn.style.display ='block';
}
function cancel(lesson,unit){
    const id_link =lesson+'.'+unit;
    const id_edit ='edit.'+lesson+'.'+unit;
    const id_save ='save.'+lesson+'.'+unit;
    const id_delet ='delet.'+lesson+'.'+unit;
    const id_cancel ='cancel.'+lesson+'.'+unit;

    const link=document.getElementById(id_link);
    const edit_btn=document.getElementById(id_edit);
    const save_btn=document.getElementById(id_save);
    const del_btn=document.getElementById(id_delet);
    const cancel_btn=document.getElementById(id_cancel);
    
    link.style.display ='none';
    edit_btn.style.display ='block';
    save_btn.style.display ='none';
    del_btn.style.display ='block';
    cancel_btn.style.display ='none';
}