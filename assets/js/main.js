document.addEventListener('DOMContentLoaded', (e)=>{
    /**
     * Get all elements which is required for this project
     * @var all element list
     */
    const headingCaption = document.querySelector('.heading-caption');



    if(headingCaption){
        /**
         * @word Change first word text color
         * */
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

});
