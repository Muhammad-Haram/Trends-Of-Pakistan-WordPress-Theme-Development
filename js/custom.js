let navInfo = document.querySelector(".nav-info");
let nav = document.querySelector(".bar");
let closeBtn = document.querySelector(".close");
let cursor = document.querySelector(".cursor");
let body = document.querySelector("body");
let cursorColor = document.querySelectorAll(".cursor-color");
let cursorColorWhite = document.querySelectorAll(".cursor-color-white");
let cursorColorNone = document.querySelectorAll(".cursor-color-none");

nav.addEventListener("click", () => {
    if (nav) {
        navInfo.classList.add("show");
    }
});

closeBtn.addEventListener("click", () => {
    if (closeBtn) {
        navInfo.classList.remove("show");
    }
})


// cursor js

body.addEventListener("mousemove", function (location) {
  cursor.style.left = location.x + "px";
  cursor.style.top = location.y + "px";
});

cursorColor.forEach((link) => {
  link.addEventListener("mousemove", () => {
    cursor.classList.add("color");
  });

  link.addEventListener("mouseleave", () => {
    cursor.classList.remove("color");
  });
});

cursorColorWhite.forEach((link) => {
  link.addEventListener("mousemove", () => {
    cursor.classList.add("white");
  });

  link.addEventListener("mouseleave", () => {
    cursor.classList.remove("white");
  });
});

cursorColorNone.forEach((link) => {
  link.addEventListener("mousemove", () => {
    cursor.classList.add("cursor-none");
  });

  link.addEventListener("mouseleave", () => {
    cursor.classList.remove("cursor-none");
  });
});

let Topictext = document.querySelectorAll(".topic-text");
Topictext.forEach(function (ele) {
  ele.addEventListener("mouseenter", function () {
    let attr = ele.getAttribute("data-img");
    cursor.style.width = "150px";
    cursor.style.height = "200px";
    cursor.style.borderRadius = "10px";
    cursor.style.backgroundImage = `url(${attr})`;
    cursor.style.zIndex = 5;
    // cursor.style.backgroundSize = "cover";
  });

  ele.addEventListener("mouseleave", function () {
    cursor.style.width = "20px";
    cursor.style.height = "20px";
    cursor.style.borderRadius = "50%";
    cursor.style.backgroundImage = `none`;
    cursor.style.zIndex = 1000;
  });
});


//swiper

var swiper = new Swiper(".mySwiper", {
  
  breakpoints: {
    500: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
  },
  autoplay: {
    delay: 2500,
  },
});

// top carousel javascript

const mainProgressBar = document.querySelector(
  ".progress-bar--primary .progress-bar__fill"
);
const mainPosts = document.querySelectorAll(".main-post");
const posts = document.querySelectorAll(".post");

let i = 0;
let postIndex = 0;
let currentPost = posts[postIndex];
let currentMainPost = mainPosts[postIndex];

let progressInterval = setInterval(progress, 100);

function progress() {
  if (i === 100) {
    i = -5;
    // reset progress bar
    currentPost.querySelector(".progress-bar__fill").style.width = 0;
    mainProgressBar.style.width = 0;
    currentPost.classList.remove("post--active");

    postIndex++;

    currentMainPost.classList.add("main-post--not-active");
    currentMainPost.classList.remove("main-post--active");

    // reset postIndex to loop over the slides again
    if (postIndex === posts.length) {
      postIndex = 0;
    }

    currentPost = posts[postIndex];
    currentMainPost = mainPosts[postIndex];
  } else {
    i++;
    currentPost.querySelector(".progress-bar__fill").style.width = `${i}%`;
    mainProgressBar.style.width = `${i}%`;
    currentPost.classList.add("post--active");

    currentMainPost.classList.add("main-post--active");
    currentMainPost.classList.remove("main-post--not-active");
  }
}

posts.forEach((post, index) => {
  post.addEventListener("click", () => {
    disablePostsTemporarily();
    i = 0; // Reset the progress bar
    postIndex = index;
    updatePosts();
  });
});

function disablePostsTemporarily() {
  // Disable pointer events on all posts
  posts.forEach((post) => {
    post.classList.add("post--disabled");
  });

  // Re-enable pointer events after 2 1/2 seconds
  setTimeout(() => {
    posts.forEach((post) => {
      post.classList.remove("post--disabled");
    });
  }, 2500);
}

function updatePosts() {
  // Reset all progress bars and classes
  posts.forEach((post) => {
    post.querySelector(".progress-bar__fill").style.width = 0;
    post.classList.remove("post--active");
  });

  mainPosts.forEach((mainPost) => {
    mainPost.classList.add("main-post--not-active");
    mainPost.classList.remove("main-post--active");
  });

  // Update the current post and main post
  currentPost = posts[postIndex];
  currentMainPost = mainPosts[postIndex];

  currentPost.querySelector(".progress-bar__fill").style.width = `${i}%`;
  mainProgressBar.style.width = `${i}%`;
  currentPost.classList.add("post--active");

  currentMainPost.classList.add("main-post--active");
  currentMainPost.classList.remove("main-post--not-active");
}
