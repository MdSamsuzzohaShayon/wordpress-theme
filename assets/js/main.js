document.addEventListener('DOMContentLoaded', (e)=>{
    /**
     * Get all elements which is required for this project
     * @var all element list
     */
    const headingCaption = document.querySelector('.heading-caption');
    const searchMenuItem = document.getElementById('search-menu-item');


    /**
     * @word Change first word text color
     * */
    if(headingCaption){
        const content = headingCaption.textContent.toString().split(/\W/).filter(c=> c !== '');
        // console.log(content)
        let newContent = '';
        for (let i = 0; i< content.length; i++){
            if(i === 0){
                newContent += `<span class="text-danger" >${content[i]}</span>`;
            }else{
                newContent += ` ${content[i]}`;
            }
        }

        headingCaption.innerHTML = newContent;
    }


    /**
     * Create bootstrap modal and display - bootstrap code is in footer.php
     */
    if(searchMenuItem){
        searchMenuItem.addEventListener('click', displayModal);
    }
});


const displayModal=(e)=>{
    e.preventDefault();
    const options = {
        backgdrop: true,
        focus: true,
    };
    const myModal = new bootstrap.Modal(document.getElementById('exampleModal'), options);
    myModal.toggle();
};



