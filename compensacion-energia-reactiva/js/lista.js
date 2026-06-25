const contentTl = gsap.timeline({
    defaults: { ease: "power4inOut", duration: 1 },
  });
  
  contentTl.to(".service-styles--list li", {
      stagger: .5,
      x: 0,
      opacity: 1,
      duration: 1.5,
    })
    .to(".service-styles--list li", {
      stagger: .5,
      "--bullet-y": 0,
      "--bullet-opacity": 1
    }, "<0.5");