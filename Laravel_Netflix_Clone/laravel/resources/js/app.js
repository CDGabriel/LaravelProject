import Alpine from 'alpinejs';
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

Swiper.use([Navigation, Pagination]);
window.Alpine = Alpine;

new Swiper('.movieSwiper', {
  modules: [Navigation],
  slidesPerView: 'auto',
  spaceBetween: 20,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

Alpine.start();

// SVG for Minus icon
const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;
// SVG for Plus icon
const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;
const movieModal = document.getElementById('movieModal');
 const watchLaterButton = document.getElementById("watchLaterButton");
document.querySelectorAll('.movie-card').forEach(card => {
  card.addEventListener('click', async () => {
    const id = card.dataset.id;
    const category = card.dataset.category;
    const response = await fetch(`/movies/${id}`);
    const movie = await response.json();
    watchLaterButton?.setAttribute('data-movie-id', movie.id);
   
    const removeButton = document.getElementById("removeWatchLaterButton");
    removeButton?.setAttribute("data-movie-id", movie.id);


    if (removeButton) {
      removeButton.addEventListener("click", async function () {

        const movieId = this.dataset.movieId;

        const response = await fetch(`/movies/${movieId}/watch-later`, {
          method: "DELETE",
          headers: {
            "X-CSRF-TOKEN": document
              .querySelector('meta[name="csrf-token"]').content,
            "Accept": "application/json",
          },
        });

        if (response.ok) {
          movieModal.classList.add("hidden");
          movieModal.classList.remove("flex");

          // Remove the movie card from the page
          document
            .querySelector(`.movie-card[data-id="${movieId}"]`)
            ?.parentElement.remove();
        }
      });
    }
    document.getElementById('modalTitle').textContent = movie.title;
    document.getElementById('modalOverview').textContent = movie.overview;
    document.getElementById('modalPoster').src =
      `https://image.tmdb.org/t/p/w780${movie.backdrop_path}`;

    document.getElementById('movieModal').classList.remove('hidden');
    document.getElementById('movieModal').classList.add('flex');
    const slug = movie.title
      .toLowerCase()
      .replace(/[^a-z0-9]+/g, '-')
      .replace(/^-|-$/g, '');
    const year = movie.release_date.substring(0, 4);
    document.getElementById('dashboardPlayButton').href =
      `https://www3.fsonline.app/film/${slug}-${year}`;
  });

});
document.getElementById('closeModal')?.addEventListener('click', () => {
  movieModal.classList.add('hidden');
  movieModal.classList.remove('flex');
  if (watchLaterButton) {
    watchLaterButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg> <span>Watch Later</span>`;
  }
});

if (watchLaterButton) {
  watchLaterButton.addEventListener("click", async function () {

    const movieId = this.dataset.movieId;

    const response = await fetch(`/movies/${movieId}/watch-later`, {
      method: "POST",
      headers: {
        "X-CSRF-TOKEN": document
          .querySelector('meta[name="csrf-token"]')
          .content,
        "Accept": "application/json",
      },
    });

    if (response.ok) {
      this.textContent = "✓ Added";
    }
  });



  function toggleAccordion(index) {
    const content = document.getElementById(`content-${index}`);
    const icon = document.getElementById(`icon-${index}`);
    // Toggle the content's max-height
    if (content.style.maxHeight && content.style.maxHeight !== '0px') {
      content.style.maxHeight = '0';
      icon.innerHTML = plusSVG;
    } else {
      content.style.maxHeight = content.scrollHeight + 'px';
      icon.innerHTML = minusSVG;
    }
  }
}

if (typeof toggleAccordion === "function") {
  window.toggleAccordion = toggleAccordion;
}

