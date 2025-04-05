(() => {

    const ball = document.querySelector('.ball');
    const body = document.body;
    let lastX = 0;
    let lastY = 0;
    
    // Follow the mouse with deforming/stretch effect
    document.addEventListener('mousemove', (e) => {
      const dx = e.clientX - lastX;
      const dy = e.clientY - lastY;
      const speed = Math.sqrt(dx * dx + dy * dy);
    
      const stretchX = 1 + Math.min(speed / 100, 0.35);
      const stretchY = 1 - Math.min(speed / 300, 0.15);
    
      const isHovering = ball.classList.contains('ball-hover');
      const scaleBoost = isHovering ? 1.3 : 1;
    
      // Animate ball position + deform
      gsap.to(ball, {
        x: e.clientX,
        y: e.clientY,
        scaleX: stretchX * scaleBoost,
        scaleY: stretchY * scaleBoost,
        duration: 0.2,
        ease: "power3.out",
        overwrite: "auto"
      });
    
      // Smooth bounce back to normal
      gsap.to(ball, {
        scaleX: scaleBoost,
        scaleY: scaleBoost,
        duration: 0.6,
        ease: "elastic.out(1, 0.3)",
        delay: 0.05
      });
    
      lastX = e.clientX;
      lastY = e.clientY;
    });
    
    // Hover targets that trigger cursor effect
    const hoverTargets = document.querySelectorAll('a, button, input, .hover-target');
    
    hoverTargets.forEach(target => {
      target.addEventListener('mouseenter', () => {
        ball.classList.add('ball-hover');
        body.classList.add('hide-cursor');
      });
    
      target.addEventListener('mouseleave', () => {
        ball.classList.remove('ball-hover');
        body.classList.remove('hide-cursor');
      });
    });
    
    
    
    
})();