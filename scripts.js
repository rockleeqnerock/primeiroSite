const Observador = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show')
        } else {
            entry.target.classList.remove('show')
        }
    })
})
const elements = document.querySelectorAll('.hidden')
elements.forEach((elements) => Observador.observe(elements))

/*sistema que observa o que está na tela e verifica se precisa ou não 
substituir o hidden pelo show*/