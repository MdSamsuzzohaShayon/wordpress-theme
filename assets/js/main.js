document.addEventListener('DOMContentLoaded', (e) => {
    /**
     * Get all elements which is required for this project
     * @var all element list
     */
    const headingCaption = document.querySelector('.heading-caption');
    const searchMenuItem = document.getElementById('search-menu-item');
    const features = document.getElementById('features');
    const featureItems = features ? features.querySelectorAll('.f-item') : null;
    const latestPopular = document.getElementById('latest-popular');
    const listHeading = latestPopular ?  latestPopular.querySelectorAll('.list-heading') : null;

    /**
     * All elements that are under development
     */
    const underDevelopmentElements = document.querySelectorAll('.under-development');


    /**
     * @word Change first word text color
     * */
    if (headingCaption) {
        const content = headingCaption.textContent.toString().split(/\W/).filter(c => c !== '');
        // console.log(content)
        let newContent = '';
        for (let i = 0; i < content.length; i++) {
            if (i === 0) {
                newContent += `<span class="text-danger" >${content[i]}</span>`;
            } else {
                newContent += ` ${content[i]}`;
            }
        }

        headingCaption.innerHTML = newContent;
    }


    /**
     * Make sure that header is not more than 32 character long
     */
    if(featureItems){
        if(featureItems.length > 0){
            featureItemHeadingSubStr(featureItems, true);

            if(featureItems[0]){
                featureItems[0].querySelector('.desc').nextElementSibling.classList.remove('mx-2');
                featureItems[0].querySelector('.desc').previousElementSibling.classList.add('mb-4');
            }
        }
    }



    /**
     * Create responsive website
     */
    const responsiveDesign=()=>{

        if(features){

            if(window.innerWidth > 768){
                /**
                 * @screen
                 * This is for desktop screen
                 */
                const newFeatures = document.createElement('div');
                newFeatures.setAttribute('class', 'row features mt-5');

                const heading2 = document.createElement('h2');
                heading2.setAttribute( 'class', 'text-danger text-center');
                heading2.textContent = "Features";
                newFeatures.appendChild(heading2);

                const lgColumn = document.createElement('div');
                lgColumn.setAttribute('class', 'col-md-4');
                newFeatures.appendChild(lgColumn);

                const smColumn1 = document.createElement('div');
                smColumn1.setAttribute('class', 'col-md-4 smColumn1');
                newFeatures.appendChild(smColumn1);

                const smColumn2 = document.createElement('div');
                smColumn2.setAttribute('class', 'col-md-4 smColumn2');
                newFeatures.appendChild(smColumn2);

                let firstOffset = 0;
                const colDivider = 6;

                for (let i = 0; i < featureItems.length; i++) {
                    // First element
                    if (i === 0) {
                        featureItems[i].classList.add('feature-lg-img');
                        featureItems[i].children[0].className = 'col-md-12';
                        featureItems[i].children[1].className = 'col-md-12';
                        lgColumn.append(featureItems[i]);
                    } else {
                        // Start front second element
                        if (0 < i && i <= colDivider) {
                            featureItems[i].classList.add('mb-3');
                            smColumn2.append(featureItems[i]);
                        }

                        if(colDivider < i && i <= featureItems.length - 1){
                            featureItems[i].classList.add('mb-3');
                            smColumn1.append(featureItems[i]);
                        }

                        firstOffset++;
                    }
                }



                features.replaceWith(newFeatures);
            }else{
                /**
                 * @screen
                 * This is for small screen
                 */

                featureItemHeadingSubStr(featureItems, false);

                features.querySelector('.desc').remove();
                const heading = features.querySelectorAll('h5');
                heading.forEach((hi, i)=>{
                    hi.classList.remove('mx-2');
                    hi.nextElementSibling.classList.remove('mx-2');
                });


                // border-bottom border-danger mb-
                const fic = features.querySelectorAll('.col-sm-12');
                fic.forEach((fici, i)=>{
                    fici.classList.add('mb-4');
                    // console.log(fic);
                });
            }
        }


        if(listHeading){
            if(listHeading.length > 0){
                const MAX_CHAR = 95;
                listHeading.forEach((lh, i)=>{
                    if(lh.textContent.toString().length > MAX_CHAR){
                        lh.textContent = lh.textContent.toString().substring(0,MAX_CHAR) + '...';
                    }
                });
            }
        }
    }
    responsiveDesign();



    /**
     * Create bootstrap modal and display - bootstrap code is in footer.php
     */
    if (underDevelopmentElements.length > 0) {
        // searchMenuItem.addEventListener('click', displayModal);
        underDevelopmentElements.forEach((ude, udei) => {
            ude.addEventListener('click', displayModal);
        });
    }
});


const displayModal = (e) => {
    e.preventDefault();
    const options = {
        backgdrop: true,
        focus: true,
    };
    const myModal = new bootstrap.Modal(document.getElementById('exampleModal'), options);
    myModal.toggle();
};





const featureItemHeadingSubStr=(featureItems, firstItemBlock)=>{
    const MAX_CHAR = 62;
    featureItems.forEach((fi, i)=>{
        const heading = fi.querySelector('h5');
        if(firstItemBlock === true){
            if(i !== 0){
                if(heading.textContent.toString().length > MAX_CHAR){
                    heading.textContent = heading.textContent.toString().substring(0,MAX_CHAR) + '...';
                }
            }
        }else{
            if(heading.textContent.toString().length > MAX_CHAR){
                heading.textContent = heading.textContent.toString().substring(0,MAX_CHAR) + '...';
            }
        }
    });
}



