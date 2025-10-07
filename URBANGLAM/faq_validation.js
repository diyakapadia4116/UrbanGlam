function validateFAQ()
{
    const question = document.querySelectorAll('.question');
    question.forEach(q => {
        q.addEventListener('click',() => {
            q.classList.toggle('active');
            q.nextElementSibling.classList.toggle('show');
        });
    });
}
document.addEventListener('DOMContentLoaded', validateFAQ);
