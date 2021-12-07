// var step2=document.getElementById('step1').style.display="none";
// var step3=document.getElementById('step2').style.display="none";
// var step4=document.getElementById('step3').style.display="none";
// var step5=document.getElementById('step4').style.display="none";
// var step6=document.getElementById('step5').style.display="none";



































// //checking anonymous and other things
// var mode=document.getElementById('modeofpayment');
//
// var dateOfCheque=document.getElementById('dateOfCheque');
//
// var checkNo=document.getElementById('checkNo');
//
// var bank=document.getElementById('bank');
//
//
// dateOfCheque.style.display="none";
// checkNo.style.display="none";
// bank.style.display="none";
//
//
// mode.addEventListener('click',function (e) {
//     if (mode.value==='3') {
//         dateOfCheque.style.display="block";
//         checkNo.style.display="block";
//         bank.style.display="block";
//
//     }else {
//         dateOfCheque.style.display="none";
//         checkNo.style.display="none";
//         bank.style.display="none";
//     }
// });
//
// var showFictitious=document.getElementById('showFictitious');
// showFictitious.style.display='none';
// var Fictitious=document.getElementById('Fictitious');
//
// Fictitious.onclick=function(e){
//
//     if (Fictitious.checked){
//         showFictitious.style.display="block";
//         document.getElementById('accountName').style.display="none";
//     }else {
//         showFictitious.style.display="none";
//         document.getElementById('accountName').style.display="block";
//     }
// };
//
//
// var cl=document.getElementById('send');
// var removechild=document.getElementById('remove');
// var b=document.getElementById('step1');
// var bulkSubmit=document.getElementById('bulkSubmit');
//
// document.getElementById('send').style.display="none";
// removechild.style.display="none";
// var bulk=document.getElementById('bulk');
// var notBult=document.getElementById('notBult');
// document.getElementById('header').style.display="none";
//
//
// bulk.addEventListener('click',function (e) {
//
//     if (bulk.value==1){
//         document.getElementById('form_show').style.display="none";
//         cl.style.display="block";
//         document.getElementById('header').style.display="block";
//     }else {
//         document.getElementById('header').style.display="none";
//         document.getElementById('form_show').style.display="block";
//
//     }
//
// });
//
// notBult.addEventListener('click',function (e) {
//
//     if (notBult.value==2){
//         document.getElementById('header').style.display="none";
//         document.getElementById('form_show').style.display="block";
//         document.getElementById('showBulk').style.display="none";
//         cl.style.display="none";
//     }else {
//         document.getElementById('form_show').style.display="block";
//     }
//
// });
//
//
// cl.addEventListener('click',function () {
//
//     var div1=document.createElement('div');
//
//     div1.classList.add('row');
//
//     var div2=document.createElement('div');
//     div2.classList.add('col-md-4');
//
//     var label1=document.createElement('label');
//
//     label1.classList.add('control-label');
//     label1.id='adId';
//     label1.for='user_id';
//     // label1.innerText='Membership ID(Last 3 Digit Number)';
//     div2.append(label1);
//
//     //adding div to the main div which is div1
//     div1.append(div2);
//     //adding input to the label of div2
//     var userId= document.createElement('input');
//     userId.type="number";
//     userId.name='user_id[]';
//     userId.required='required';
//     userId.placeholder='Membership ID(Last 3 Digit Number)',
//     userId.classList.add('form-control');
//     userId.id='userIss';
//     userId.maxLength=3;
//     userId.minLength=3;
//     div2.append(userId);
//
//     //creating another div
//     var div3=document.createElement('div');
//     div3.classList.add('col-md-4');
//     var label2=document.createElement('label');
//     label2.classList.add('control-label');
//     label2.id='amount';
//     label2.for='amount';
//     // label2.innerText='Amount(GHS)';
//     //adding label to the div created
//     div3.append(label2);
//     div1.append(div3);
//     //creating input for the div3 label
//     var input2=document.createElement('input');
//     input2.name='amount[]';
//     input2.id='amount';
//     input2.required='required';
//     input2.placeholder='Amount(GHS)';
//     input2.step='any';
//     input2.type='number';
//     input2.classList.add('form-control');
//     div3.append(input2);
//
//
//     var div0=document.createElement('div');
//     div0.classList.add('col-md-4');
//     var label3=document.createElement('label');
//     label3.classList.add('control-label');
//     label3.id='amount';
//     label3.for='amount';
//     // label3.innerText='select';
//     // adding label to the div0 created
//     div0.append(label3);
//
//     var option =document.createElement('select');
//     option.classList.add('form-control');
//     option.name="modeOfPayment[]";
//     option.id="modeOfPayment";
//     var options1=document.createElement('option');
//     options1.innerText="Cash";
//     options1.value=1;
//     option.append(options1);
//
//
//     div0.append(option);
//     div1.append(div0);
//     bulkSubmit.append(div1);
//
// });
//
//
// removechild.addEventListener('click',function () {
//     bulkSubmit.removeChild(bulkSubmit.lastElementChild);
// });
//
//
//
// var bulksubmitsave=document.getElementById('bulksubmitsave');
//
// bulksubmitsave.style.display='none';
//
// var total_amount=document.getElementById('total_amount');
// total_amount.style.display="none";
// var totals=document.getElementById('amountId');
//
//
//
// cl.addEventListener('click',function () {
//
//     document.getElementById('bulksubmitsave').style.display='block';
//
//     if (bulksubmitsave){
//
//         removechild.style.display="block";
//     }
//     total_amount.style.display="block";
//
//
// });
//
//
//
//
//
//
//
//




/////////////////////////
// {{--<script>--}}
// {{--$.notify({--}}
//     {{--// options--}}
//         {{--icon: 'glyphicon glyphicon-warning-sign',--}}
//         {{--title: 'Hello! Admin,',--}}
//         {{--message: 'Greetings from TAC-HQ(IT Department).We want to inform you that the registration form has not been change. we only compressed it. ' +--}}
//         {{--'Some of the input form has been taken out since the system will automatically fill them for you. Like your region,area,district and local. '+--}}
//         {{--' Every Registered Member is automatically Active and also  a member'+--}}
//
//         {{--'Thank you',--}}
//         {{--target: '_blank'--}}
//         {{--},{--}}
//         {{--// settings--}}
//             {{--element: 'body',--}}
//             {{--position: null,--}}
//             {{--type: "danger",--}}
//             {{--allow_dismiss: true,--}}
//             {{--newest_on_top: false,--}}
//             {{--showProgressbar: false,--}}
//             {{--placement: {--}}
//                 {{--from: "top",--}}
//                 {{--align: "right"--}}
//                 {{--},--}}
//             {{--offset: 20,--}}
//             {{--spacing: 10,--}}
//             {{--z_index: 1031,--}}
//             {{--delay: 10000,--}}
//             {{--timer: 10000,--}}
//             {{--url_target: '_blank',--}}
//             {{--mouse_over: null,--}}
//             {{--animate: {--}}
//                 {{--enter: 'animated fadeInDown',--}}
//                 {{--exit: 'animated fadeOutUp'--}}
//                 {{--},--}}
//             {{--onShow: null,--}}
//             {{--onShown: null,--}}
//             {{--onClose: null,--}}
//             {{--onClosed: null,--}}
//             {{--icon_type: 'class',--}}
//             {{--template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +--}}
//             {{--'<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +--}}
//             {{--'<span data-notify="icon"></span> ' +--}}
//             {{--'<span data-notify="title">{1}</span> ' +--}}
//             {{--'<span data-notify="message">{2}</span>' +--}}
//             {{--'<div class="progress" data-notify="progressbar">' +--}}
//             {{--'<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +--}}
//             {{--'</div>' +--}}
//             {{--'<a href="{3}" target="{4}" data-notify="url"></a>' +--}}
//             {{--'</div>'--}}
//             {{--});--}}
// {{--</script>--}}