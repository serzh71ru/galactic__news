
document.addEventListener('DOMContentLoaded', function() {
    const paginationBtns = document.querySelectorAll('.pagination__btn');
    let currentPage;
    paginationBtns.forEach((i) => {
        if(i.classList.contains('active')){
            currentPage = i.textContent;
        }
    })
    paginationBtns.forEach(button => {
        button.addEventListener('click', function() {
            let page = this.textContent;
            if(this.classList.contains('arrow') && this.classList.contains('back')){
                page = Number(currentPage) - 1;
            } else if(this.classList.contains('arrow') && this.classList.contains('forward')){
                page = Number(currentPage) + 1;
            }

            if (page) {
                window.location.href = '?page=' + page;
            }
        });
    });
});
