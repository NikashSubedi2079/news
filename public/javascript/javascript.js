document.addEventListener('DOMContentLoaded', function (){
    let button_variables_define = document.querySelector('button');
button_variables_define.addEventListener('click',function_define);

function function_define()
{
    let variables = prompt('Enter roll');
    
    button_variables_define.textContent = ' Your Roll Number is' + variables;

}
})