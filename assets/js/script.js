/* Mobile Menu */

document.addEventListener("DOMContentLoaded", function() {
    var toggleButton = document.getElementById('mobile-navigation-toggle');
    var menu = document.querySelector('.mobile-toggle');
    var icon = document.getElementById('mobile-navigation-icon');
    var body = document.body; // Reference to the body

    toggleButton.addEventListener('click', function(e) {
        e.preventDefault();

        if (menu.style.display === "none" || menu.style.display === "") {
            menu.style.display = "block";
            icon.src = "lungaschool2023-closebutton.svg";
            // Disable scrolling on body
            body.style.overflow = "hidden";
            // Ensure the menu can scroll if needed
            menu.style.overflowY = "scroll";
        } else {
            menu.style.display = "none";
            icon.src = "lungaschool2023-menubutton.svg";
            // Re-enable scrolling on body
            body.style.overflow = "";
        }
    });
});


/* Pop-Ups */

function closePopUp(element) {
    element.closest('.popup').style.display = 'none';
}

/* Logo */

var spans = document.querySelectorAll('.logo-text span');

function addHoverEffect() {
    spans.forEach(function(span) {
        span.style.color = 'var(--yellow)';
    });
}

function removeHoverEffect() {
    spans.forEach(function(span) {
        span.style.color = 'black';
    });
}

spans.forEach(function(span) {
    span.addEventListener('mouseover', addHoverEffect);
    span.addEventListener('mouseout', removeHoverEffect);
});

/* Custom Link */

/* AJAX */

$(document).ready(function() {
    $('nav a').click(function(e) {
        e.preventDefault(); // Stop the default action of the link
        var href = $(this).attr('href'); // Get the href of the clicked link

        $('#main-content').load(href + ' #main-content', function() {
        // This callback function can be used to reinitialize scripts or update the UI
        });
    });
});

history.pushState({path: href}, '', href);

/* SVG attributes */

async function replaceImgWithInlineSVG() {
    const images = document.querySelectorAll('img.landing-illustration-img');
  
    for (let img of images) {
      try {
        const response = await fetch(img.src);
        const svgText = await response.text();
        const div = document.createElement('div');
        div.innerHTML = svgText;
        const svg = div.querySelector('svg');
  
        if (svg) {
          svg.removeAttribute('width');
          svg.removeAttribute('height');
          svg.setAttribute('preserveAspectRatio', 'none');
          
          img.parentNode.replaceChild(svg, img);
        }
      } catch (error) {
        console.error('Error replacing img with SVG:', error);
      }
    }
  }