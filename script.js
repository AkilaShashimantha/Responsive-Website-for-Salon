
  document.querySelectorAll('button[data-target]').forEach(button => {
    button.addEventListener('click', function() {
      const targetId = this.getAttribute('data-target');  
      const targetElement = document.querySelector(targetId); 

      // Smooth scroll to the target element
      targetElement.scrollIntoView({
        behavior: 'smooth',
        block: 'start' 
      });
    });
  });