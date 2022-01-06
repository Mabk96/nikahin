var owl = $(".owl-carousel");
owl.owlCarousel({
  autoWidth: false,
  items: 1,
  items1: 3,
  loop: true,
  autoplay: true,
  autoplayTimeout: 1500,
  autoplayHoverPause: false,
});
$(".play").on("click", function () {
  owl.trigger("play.owl.autoplay", [1000]);
});
$(".stop").on("click", function () {
  owl.trigger("stop.owl.autoplay");
});
