<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Quote Request Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            padding: 20px;
            background: #f5f5f5;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .required {
            color: red;
        }

        .form-input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .placement-options {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }

        .mockup-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 10px;
        }

        .mockup-option {
            position: relative;
            cursor: pointer;
        }

        .mockup-image {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .mockup-label {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 5px;
            font-size: 12px;
            text-align: center;
            border-bottom-left-radius: 8px;
            border-bottom-right-radius: 8px;
        }

        .hidden-checkbox {
            position: absolute;
            opacity: 0;
        }

        .mockup-option input[type="checkbox"]:checked + .mockup-image {
            border: 3px solid #007bff;
        }

        textarea {
            width: 100%;
            min-height: 100px;
            resize: vertical;
        }

        .upload-box {
            border: 2px dashed #ddd;
            padding: 20px;
            text-align: center;
            margin-top: 10px;
            border-radius: 4px;
        }

        .submit-btn {
            background: #e6b777;
            color: black;
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
            margin-top: 20px;
        }

        .file-info {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
        }
        #imageUrl{
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        .red{
            color: red;
            display: none;
        }
        #errorMessage{
            color: red;
            display: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form id="form" action="{{url('/form')}}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">NAME<span class="required">*</span></label>
                <input type="text" class="form-input" name="name" placeholder="Full Name"  id="name">
                <div id="nameError" class="red" >
                    Name cannot be empty
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">EMAIL<span class="required">*</span></label>
                <input type="email" class="form-input" name="email" placeholder="example@mail.com" id="email">
                <div id="emailError" class="red" >
                    Email cannot be empty
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">PHONE NUMBER<span class="required">*</span></label>
                <input type="tel" class="form-input" name="phone" placeholder="Phone Number"  id="phone">
                <div id="phoneError" class="red" >
                    Phone number cannot be empty
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">PLACEMENTS</label>
                <div class="placement-options">
                    <label>
                        <input type="checkbox" name="indoorPlacement" value="indoor" class="placement" id="indoorPlacement"> INDOOR
                    </label>
                    <label>
                        <input type="checkbox" name="outdoorPlacement" value="outdoor" class="placement" id="outdoorPlacement"> OUTDOOR
                    </label>
                    
                </div>
                <div id="Perror-message" class="red"  >
                    Please select at least one placement option.
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">SELECT MOCKUPTYPES<span class="required">*</span></label>
                <div class="mockup-grid">
                    <label class="mockup-option">
                        <input type="checkbox" class="hidden-checkbox" name="bladeMockup" value="3d-blade" id="bladeMockup">
                        <img src="https://cdn.shopify.com/s/files/1/0638/9448/7178/files/3d_blade_sign_2_1.webp?v=1733212743" class="mockup-image">
                        <div class="mockup-label">3D BLADE SIGN</div>
                    </label>
                    <label class="mockup-option">
                        <input type="checkbox" class="hidden-checkbox" name="frontMockup" value="acrylic-front" id="frontMockup">
                        <img src="https://cdn.shopify.com/s/files/1/0699/3553/0271/files/Popped.jpg?v=1711105521" class="mockup-image">
                        <div class="mockup-label">ACRYLIC FRONT-LIT</div>
                    </label>
                    <label class="mockup-option">
                        <input type="checkbox" class="hidden-checkbox" name="threeMockup" value="3d-metal" id="threeMockup">
                        <img src="https://cdn.shopify.com/s/files/1/0699/3553/0271/files/AXdD.jpg?v=1711105521" alt="3D Metal Back-lit" class="mockup-image">
                        <div class="mockup-label">3D METAL BACK-LIT</div>
                    </label>
                    <label class="mockup-option">
                        <input type="checkbox" class="hidden-checkbox" name="twoMockup" value="2d-metal" id="twoMockup">
                        <img src="https://cdn.shopify.com/s/files/1/0699/3553/0271/files/adca.jpg?v=1711105521" class="mockup-image">
                        <div class="mockup-label">2D METAL LETTERS</div>
                    </label>
                    <label class="mockup-option">
                        <input type="checkbox" class="hidden-checkbox" name="lettersMockup" value="acrylic-letters" id="lettersMockup">
                        <img src="https://cdn.shopify.com/s/files/1/0699/3553/0271/files/semnd_25_1.jpg?v=1711105521" alt="Acrylic Letters" class="mockup-image">
                        <div class="mockup-label">ACRYLIC LETTERS</div>
                    </label>
                    <label class="mockup-option">
                        <input type="checkbox" class="hidden-checkbox" name="lightboxMockup" value="lightbox" id="lightboxMockup">
                        <img src="https://cdn.shopify.com/s/files/1/0638/9448/7178/files/200x200_1.png?v=1727096112" alt="Lightbox" class="mockup-image">
                        <div class="mockup-label">LIGHTBOX</div>
                    </label>
                </div>
                <div id="Merror-message" class="red" >
                    Please select at least one Image.
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">DETAILS<span class="required">*</span></label>
                <textarea name="detail" id="detail" class="form-input" placeholder="For a quick turn around, please share budget, size dimensions and any other design/sign specifications you have in your mind"  ></textarea>
                <div id="detailError" class="red" >
                    Details cannot be empty
                </div>
            </div>

            <div class="form-group">
                
                <label class="form-label">UPLOAD AN IMAGE<span class="required">*</span></label>
                <input type="text" class="form-control" id="imageUrl" name="imageUrl" placeholder="URL of your Business/Logo or Image File">
                <div class="upload-box">
                    <input type="file" accept=".ai,.eps,.gif,.jpg,.jpeg,.pdf,.png,.tiff" id="image" name="image">
                    <p>Upload Images</p>
                </div>
                <p class="file-info">Max file size: 20000 KB | Allow file types: ai, eps, gif, jpg, jpeg, pdf, png, tiff</p>
            </div>
            

            <button type="submit" class="submit-btn">GET FREE QUOTES & MOCKUPS</button>
        </form>
    </div>
</body>
<script>
const name= document.getElementById('name');
const email= document.getElementById('email');
const phone=document.getElementById('phone');
const indoorPlacement=document.getElementById('indoorPlacement');
const outdoorPlacement=document.getElementById('outdoorPlacement');
const bladeMockup=document.getElementById('bladeMockup');
const frontMockup=document.getElementById('frontMockup');
const threeMockup=document.getElementById('threemockup');
const twoMockup=document.getElementById('twoMockup');
const lettersMockup=document.getElementById('lettersMockup');
const detail=document.getElementById('detail');
const imageUrl=document.getElementById('imageUrl');
const image=document.getElementById('image');




    // if image is uploaded then url clears and if url is added so image clears
    document.addEventListener('DOMContentLoaded', function () {
        
    const urlInput = document.getElementById('imageUrl');
    const imageInput = document.getElementById('image');
    
    

   
    urlInput.addEventListener('input', function () {
        if (urlInput.value.trim() !== '') {
            imageInput.value = ''; 
        }
    });

    
    imageInput.addEventListener('change', function () {
        if (imageInput.files.length > 0) {
            urlInput.value = ''; 
        }
    });
});

// checkboxes images selection validation
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    const checkboxes = document.querySelectorAll('.hidden-checkbox');
    const errorMessage = document.getElementById('Merror-message');

    form.addEventListener('submit', function (event) {
        
        const isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

        if (!isChecked) {
            event.preventDefault(); 
            errorMessage.style.display = 'block'; 
        } else {
            errorMessage.style.display = 'none'; 
        }

        if(name.value===''){
            
            nameError.style.display='block';
        }
        else{
            nameError.style.display='none';
        }

        if(email.value===''){
            emailError.style.display='block';

        }
        else if((!validateEmail(email.value))){
            emailError.innerHTML='Email format not correct';
        }
        else{
            emailError.style.display='none';
        }

        if(phone.value===''){
            phoneError.style.display='block'
        }
        else if(!(phoneFormat(phone.value))){

            phoneError.innerHTML='Phone format is not correct'
        }
        else{
            phoneError.style.display='none'
        }

        if(detail.value===''){
            event.preventDefault();
            detailError.style.display='block'
    
        }
        else{
            detailError.style.display='none';
        }
          


       

    });
});

// placement check

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('form');
    const checkboxes = document.querySelectorAll('.placement');
    const errorMessage = document.getElementById('Perror-message');

    form.addEventListener('submit', function (event) {
        const isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);

        if (!isChecked) {
            event.preventDefault(); 
            errorMessage.style.display = 'block'; 
        } else {
            errorMessage.style.display = 'none'; 
        }
    });
});

// check name,email,phone and details
document.addEventListener('DOMContentLoaded',function(){
    const form= document.getElementById('form');
    const name= document.getElementById('name');
    const email= document.getElementById('email');
    const phone= document.getElementById('phone');
    const detail= document.getElementById('detail');
    const nameError= document.getElementById('nameError');
    const emailError= document.getElementById('emailError');
    const phoneError= document.getElementById('phoneError');
    const detailError= document.getElementById('detailError');
    
document.addEventListener('submit',function(e){
   if(!(validateInputs)) {
    const nameResult= name.value;
const emailResult= email.value;
const phoneResult= phone.value;
const indoorResult= indoorPlacement.value;
const outdoorResult= outdoorPlacement.value;
const bladeResult= bladeMockup.value;
const frontResult= frontMockup.value;
const threeResult= threeMockup.value;
const twoResult= twoMockup.value;
const lettersResult= lettersMockup.value;
const lightresult= lightboxMockup.value;
const detailResult= detail.value;
const urlResult= imageUrl.value;
const imageResult= image.value;
    
   } 
});
   
});



function callApi(nameResult,emailResult,phoneResult,indoorResult,outdoorResult,bladeResult,frontResult,threeResult,twoResult,lettersResult,lightresult,detailResult,urlResult,imageResult){
// const nameResult= name.value;
// const emailResult= email.value;
// const phoneResult= phone.value;
// const indoorResult= indoorPlacement.value;
// const outdoorResult= outdoorPlacement.value;
// const bladeResult= bladeMockup.value;
// const frontResult= frontMockup.value;
// const threeResult= threeMockup.value;
// const twoResult= twoMockup.value;
// const lettersResult= lettersMockup.value;
// const lightresult= lightboxMockup.value;
// const detailResult= detail.value;
// const urlResult= imageUrl.value;
// const imageResult= image.value;


const myHeaders = new Headers();
myHeaders.append("Content-Type", "application/json");

const raw = JSON.stringify({
  "name": nameResult,
  "email": emailResult,
  "phone": phoneResult,
  "indoorPlacement": indoorResult,
  "outdoorPlacement": outdoorResult,
  "bladeMockup": bladeResult,
  "frontMockup": frontResult,
  "threeMockup": threeResult,
  "twoMockup": twoResult,
  "lettersMockup": lettersResult,
  "lightboxMockup": lightresult,
  "detail": detailResult,
  "imageUrl":urlResult,
  "image":imageResult
});

const requestOptions = {
  method: "POST",
  headers: myHeaders,
  body: raw,
  redirect: "follow"
};

fetch("http://localhost:8000/api/form", requestOptions)
  .then((response) => response.text())
  .then((result) => console.log(result))
  .catch((error) => console.error(error));




} 



function validateInputs(){
if(name.value===''){
    
}
}

function validateEmail(email) {

const regex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
return regex.test(email);
}

function phoneFormat(phone) {
    const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    return re.test(String(phone));
}

</script>
</html>