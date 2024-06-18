document.getElementById('dateField').valueAsDate = new Date();


function previewBigImage() {
    const preview = document.getElementsByClassName("info__post_img");
    let InputPrewiew = document.getElementsByClassName("post_img-big"); 
    let inp = document.getElementById("upload__download_post"); 
    let sizes = document.getElementsByClassName("form__post_img_sizes"); 
    const file = document.getElementById("download_post_img").files[0];
    const reader = new FileReader();

    reader.addEventListener(
      "load",
      () => {
        preview[0].src = reader.result;
        inp.classList.add('upload__download_post-replaced'); 
        //InputPrewiew[0].style.backgroungImage(reader.result);
        sizes[0].classList.add('form__post_img_sizes-hidden');

      },
      false,
    );
  
    if (file) {
        reader.readAsDataURL(file);
    }
    else{

    }
  }

function previewSmallImage() {
    const preview = document.getElementsByClassName("post_mini_prewiew__image");
    const InputPrewiew = document.getElementsByClassName();
    const file = document.getElementById("download_post-small_img").files[0];
    const reader = new FileReader();
  
    reader.addEventListener(
      "load",
      () => {
        preview[0].src = reader.result;
        console.log(preview.src);
        
      },
      false,
    );
  
    if (file) {
        reader.readAsDataURL(file);
    }
  }  
  
function DisplayTextFromInput(InputId, Output, def){
    let input = document.getElementById(InputId);
    let outs = Array.from(document.getElementsByClassName(Output));
    let defaultValue;
    if (def == 1)
        defaultValue = "New Post";
    if (def == 2)
        defaultValue = "Please, enter any description";
    if (def == 3)
        defaultValue = "Enter Author Name";
    if (def == 4)
        defaultValue =  new Date().valueAsDate;

    outs.forEach(el => {
        if (input.value )
            el.innerHTML = input.value
        else
            el.innerHTML = defaultValue
    });
}  