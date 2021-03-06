const products = document.querySelectorAll('li.product')

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.intersectionRatio >= 0.1) {
      entry.target.classList.add("in-view")
    } else {
      entry.target.classList.remove("in-view")
    }
  })
}, {
  threshold: [0, 0.1, 1]
})

products.forEach(product => {
  observer.observe(product)
})

// inView('.site-main')
//   .on('enter', section => {
//     section.classList.add('in-viewport')
//   })
//   .on('exit', section => {
//     section.classList.remove('in-viewport')
//   })