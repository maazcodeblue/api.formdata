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

        .service-options {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 10px;
        margin-top: 5px;
    }
    
    .service-options label {
        display: flex;
        align-items: center;
        gap: 5px;
    }
    
    .service-options input[type="checkbox"] {
        margin: 0;
    }
    </style>
</head>
<body>
    <div class="form-container">
        <form id="form" action="{{url('/signage')}}" method="POST">
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
                <label class="form-label">SIZE<span class="required">*</span></label>
                <select class="form-input" name="size" id="size">
                    <option value="">Select Sizes</option>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
                <div id="sizeError" class="red">
                    Please select a size
                </div>
            </div>


            <div class="form-group">
                <label class="form-label">DO YOU WANT A COMPLETE BRANDING SOLUTION?</label>
                <div class="placement-options">
                    
                        <input type="checkbox" name="brandingSolution" value="yes" id="brandingSolution"> YES
                   
                </div>
            </div>




            <div class="form-group">
                <label class="form-label">DO YOU NEED ADDITIONAL SERVICES?</label>
                <div class="service-options">
                    <label>
                        <input type="checkbox" name="installation" value="installation" class="additional" id="installation"> INSTALLATION
                    </label>
                    <label>
                        <input type="checkbox" name="siteInspection" value="siteInspection" class="additional" id="siteInspection"> SITE INSPECTION
                    </label>
                    <label>
                        <input type="checkbox" name="signPermits" value="signPermits" class="additional" id="signPermits"> SIGN PERMITS
                    </label>
                    <label>
                        <input type="checkbox" name="waterProofing" value="waterProofing" class="additional" id="waterProofing"> WATER PROOFING
                    </label>
                    <label>
                        <input type="checkbox" name="ulCertification" value="ulCertification" class="additional" id="ulCertification"> UL CERTIFICATION
                    </label>
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

    
    
    
    
    
    
    <style>
    
    </style>


</body>
<script>
    const button = document.getElementById('button');
    const name = document.getElementById('name');
    const email = document.getElementById('email');
    const phone = document.getElementById('phone');
    const detail = document.getElementById('detail');
    const form = document.getElementById('form');
    const indoorPlacement = document.getElementById('indoorPlacement');
    const outdoorPlacement = document.getElementById('outdoorPlacement');
    const bladeMockup = document.getElementById('bladeMockup');
    const frontMockup = document.getElementById('frontMockup');
    const threeMockup = document.getElementById('threemockup');
    const twoMockup = document.getElementById('twoMockup');
    const lettersMockup = document.getElementById('lettersMockup');
    const lightboxMockup=document.getElementById('lightboxMockup');
    const size= document.getElementById('size');
    const brandingSolution= document.getElementById('brandingSolution');
    const installation= document.getElementById('installation');
    const siteInspection= document.getElementById('siteInspection');
const signPermits= document.getElementById('signPermits');
const waterProofing= document.getElementById('waterProofing');
const ulCertification= document.getElementById('ulCertification');
    const imageUrl = document.getElementById('imageUrl');
    const image = document.getElementById('image');
    const Pboxes = document.querySelectorAll('.placement');
    const Mboxes = document.querySelectorAll('.hidden-checkbox');
    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');
    const phoneError = document.getElementById('phoneError');
    const detailError = document.getElementById('detailError');


    document.addEventListener('DOMContentLoaded', function () {
        const urlInput = document.getElementById('imageUrl')
        const imageInput = document.getElementById('image')

        urlInput.addEventListener('input', function () {
            if (urlInput.value.trim() !== '') {
                imageInput.value = ''
            }
        })

        imageInput.addEventListener('change', function () {
            if (imageInput.files.length > 0) {
                urlInput.value = ''
            }
        })
    })




    form.addEventListener('submit', function (e) {
        e.preventDefault()
        const checkPlace = Array.from(Pboxes).some(checkbox => checkbox.checked);
        const checkMockup = Array.from(Mboxes).some(checkbox => checkbox.checked);
        const Perror = document.getElementById('Perror-message');
        const Merror = document.getElementById('Merror-message');
        if (!checkPlace) {


            Perror.style.display = 'block';
        }
        else {
            Perror.style.display = 'none';
        }

        if (!checkMockup) {

            Merror.style.display = 'block'
        }
        else {
            Merror.style.display = 'none';
        }

        if (name.value === '') {
            nameError.style.display = 'block';
        }
        else {
            nameError.style.display = 'none';
            console.log(name.value);
        }

        if (email.value === '') {

            emailError.style.display = 'block';
        }
        else {
            emailError.style.display = 'none';
        }

        if (phone.value === '') {

            phoneError.style.display = 'block';

        }
        else {
            phoneError.style.display = 'none'
        }

        if (detail.value === '') {


            detailError.style.display = 'block';
        }
        else {

            detailError.style.display = 'none';
        }




        // submitFormtwo();


    });

//     function submitForm() {
//         const myHeaders = new Headers();
// myHeaders.append("Content-Type", "application/json");

// const formData = new FormData();

// const raw = {
//   "name": name,
//   "email": email,
//   "phone": phone,
//   "indoorPlacement": indoorPlacement,
//   "outdoorPlacement": outdoorPlacement,
//   "bladeMockup": bladeMockup,
//   "frontMockup": frontMockup,
//   "threeMockup": threeMockup,
//   "twoMockup": twoMockup,
//   "lettersMockup": lettersMockup,
//   "lightboxMockup": lightboxMockup,
//   "size": size,
//   "brandingSolution": brandingSolution,
//   "installation": installation,
//   "siteInspection": siteInspection,
//   "signPermits": signPermits,
//   "waterProofing": waterProofing,
//   "ulCertification": ulCertification,
//   "detail": detail,
//   "imageUrl": imageUrl,
//   "image": image
// };

// // Append each key-value pair to the FormData object
// for (const key in raw) {
//     formData.append(key, raw[key]);
// }

// // Example: If "image" is an actual file input (instead of a string), append it as a file
// // Assuming you have an actual file from an input element
// const fileInput = document.querySelector('input[type="file"]');
// if (fileInput && fileInput.files.length > 0) {
//     formData.set("image", fileInput.files[0]); // Overwrite string with actual file
// }

// // Debug: Log formData values
// for (let pair of formData.entries()) {
//     console.log(pair[0], pair[1]);
// }


// const requestOptions = {
//   method: "POST",
//   headers: myHeaders,
//   body: raw,
//   redirect: "follow"
// };

// fetch("http://localhost:8000/api/signage", requestOptions)
//   .then((response) => response.text())
//   .then((result) => console.log(result))
//   .catch((error) => console.error(error));
//     }




//     function submitFormtwo() {
//     const formData = new FormData();

//     // Get input values
//     formData.append("name", document.getElementById("name").value);
//     formData.append("email", document.getElementById("email").value);
//     formData.append("phone", document.getElementById("phone").value);
//     formData.append("detail", document.getElementById("detail").value);
//     formData.append("imageUrl", document.getElementById("imageUrl").value);

//     // Handle placements
//     formData.append("indoorPlacement", document.getElementById("indoorPlacement").checked ? "indoor" : null);
//     formData.append("outdoorPlacement", document.getElementById("outdoorPlacement").checked ? "outdoor" : null);

//     // Handle mockups
//     const mockupCheckboxes = {
//         bladeMockup: "3d-blade",
//         frontMockup: "acrylic-front",
//         threeMockup: "3d-metal",
//         twoMockup: "2d-metal",
//         lettersMockup: "acrylic-letters",
//         lightboxMockup: "lightbox"
//     };

//     for (const [id, value] of Object.entries(mockupCheckboxes)) {
//         formData.append(id, document.getElementById(id).checked ? value : null);
//     }

//     // Other options
//     formData.append("size", document.getElementById("size").value || "medium");
//     formData.append("brandingSolution", document.getElementById("brandingSolution").checked ? "yes" : null);
//     formData.append("installation", document.getElementById("installation").checked ? "installation" : null);
//     formData.append("siteInspection", document.getElementById("siteInspection").checked ? "siteInspection" : null);
//     formData.append("signPermits", document.getElementById("signPermits").checked ? "signPermits" : null);
//     formData.append("waterProofing", document.getElementById("waterProofing").checked ? "waterProofing" : null);
//     formData.append("ulCertification", document.getElementById("ulCertification").checked ? "ulCertification" : null);

//     // Get file input
//     const imageFile = document.getElementById("image").files[0];
//     if (imageFile) {
//         formData.append("image", imageFile);
//     }

//     // Submit form
//     fetch("http://localhost:8000/api/signage", {
//         method: "POST",
//         body: formData,
//     })
//     .then(response => response.json())
//     .then(result => {
//         console.log("Success:", result);

//         // ✅ Clear the form after successful submission
//         document.getElementById("form").reset();

//         // ✅ Optional: Uncheck all checkboxes manually
//         document.querySelectorAll('.hidden-checkbox, .placement').forEach(checkbox => {
//             checkbox.checked = false;
//         });

//         // ✅ Reload the page after a short delay (1 second)
//         setTimeout(() => {
//             window.location.reload();
//         }, 1000);
//     })
//     .catch(error => {
//         console.error("Error:", error);
//     });
// }






</script>
</html>