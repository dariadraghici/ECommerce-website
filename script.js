const allStar = document.querySelectorAll('.review .box-container .box .rating .star')

allStar.forEach
(
    (item, idx)=> 
    {
        item.addEventListener
        (
            'click', function() 
            {
                let click = 0
                allStar.forEach
                (
                    i=> 
                    {
                        i.classList.replace('bxs-star','bx-star')
                    }
                )
                for(let i=0; i<allStar.length;i++)
                {
                    if(i <= idx)
                    {
                        allStar[i].classList.replace('bx-star', 'bxs-star')
                    }
                    else
                    {
                        allStar[i].style.setProperty('--i', click)
                        click++
                    }
                }
            }
        )
    }
)
