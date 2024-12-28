{{-- <!-- Styles for Footer and Social Media Links -->
<style>
  .footer-bg {
      background-color: #343a40; /* Adjust background color as needed */
  }
  .social-links {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
  }
  .social-title {
      font-size: 1.2rem;
      color: #fff;
      margin-bottom: 10px;
  }
  .social-link-wrapper {
      display: flex;
      gap: 15px;
  }
  .social-link {
      color: #fff;
      font-size: 1.5rem;
      padding: 10px;
      width: 45px;
      height: 45px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%; /* Makes the icons circular */
      transition: background-color 0.3s ease;
  }
  .social-link.facebook {
      background-color: #3b5998;
  }
  .social-link.facebook:hover {
      background-color: #2d4373;
  }
  .social-link.youtube {
      background-color: #FF0000;
  }
  .social-link.youtube:hover {
      background-color: #cc0000;
  }
</style>

<!-- Bootstrap Icons CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
<footer class="container text-white footer-bg mt-2">
  <!-- Seller Sign Up Button -->
  <a href="{{ route('seller-register') }}" class="btn btn-secondary mt-3 ms-3 dropbtn-bg">Seller Sign Up</a>
  
  <!-- Help Section Title -->
  <h4 class="text-uppercase pt-3 text-center">Help</h4>
  
  <!-- Contact Information -->
  <p class="text-center pb-2">
    CONTACT US: 
    <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox" class="text-white">elitecorporation@elitecorpo.com</a>
  </p>
  
  <!-- Social Media Links Section -->
  <div class="social-links pb-3">
    <!-- Social Media Title -->
    <div class="social-title">Our Social Media Link</div>
    
    <!-- Social Media Icons -->
    <div class="social-link-wrapper">
      <!-- Facebook Link -->
      <a href="https://web.facebook.com/elitebdforangels?rdid=PfjEQvLDxz8BbuKt&share_url=https%3A%2F%2Fweb.facebook.com%2Fshare%2F3GsAomT5FrJYA9vm%2F%3F_rdc%3D1%26_rdr#" class="social-link facebook" target="_blank" aria-label="Facebook">
        <i class="bi bi-facebook"></i>
      </a>
      
      <!-- YouTube Link -->
      <a href="https://www.youtube.com/@elitecorporationofficial" class="social-link youtube" target="_blank" aria-label="YouTube">
        <i class="bi bi-youtube"></i>
      </a>
    </div>
  </div>
</footer> --}}


<!-- Styles for Footer and Social Media Links -->
<style>
    .footer-bg {
        background-color: #343a40;
        /* Dark background color */
        color: #fff;
        /* Text color */
        padding: 40px 15px;
        /* Ample padding for better spacing */
        text-align: center;
        /* Center content */
    }

    .footer-bg h4 {
        font-size: 1.4rem;
        margin-bottom: 20px;
        font-weight: bold;
        letter-spacing: 2px;
        color: #ffbf00;
        /* Bright color for the heading */
    }

    .social-links {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 15px;
        /* Add space between the social media section */
    }

    .social-title {
        font-size: 1.2rem;
        color: #fff;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .social-link-wrapper {
        display: flex;
        gap: 20px;
        /* Increase space between social icons */
        justify-content: center;
    }

    .social-link {
        color: #fff;
        font-size: 2rem;
        padding: 15px;
        width: 55px;
        height: 55px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease-in-out;
        /* Smooth hover transition */
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Soft shadow effect */
    }

    .social-link:hover {
        transform: scale(1.1);
        /* Slight zoom on hover */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        /* Stronger shadow on hover */
    }

    .social-link.facebook {
        background-color: #3b5998;
    }

    .social-link.facebook:hover {
        background-color: #2d4373;
    }

    .social-link.youtube {
        background-color: #FF0000;
    }

    .social-link.youtube:hover {
        background-color: #cc0000;
    }

    /* Button Styling */
    .btn-signup {
        background-color: #ffbf00;
        color: #343a40;
        padding: 12px 30px;
        border-radius: 30px;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 1.1rem;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    .btn-signup:hover {
        background-color: #e6a800;
        color: #fff;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        /* Hover effect for the button */
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .footer-bg h4 {
            font-size: 1.2rem;
            /* Reduce heading size on mobile */
        }

        /* .social-link-wrapper {
            flex-direction: column;
            gap: 15px;
        } */
    }
</style>

<!-- Bootstrap Icons CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">

<footer class="container-fluid footer-bg mt-2">
    <!-- Seller Sign Up Button -->
    <div class="d-flex justify-content-center mb-3">
        <a href="{{ route('seller-register') }}" class="btn btn-signup mt-3">Seller Sign Up</a>
    </div>

    <!-- Contact Information -->
    <p class="pb-2">
        <strong>CONTACT US:</strong>
        <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox"
            class="text-white">elitecorporation@elitecorpo.com</a>
    </p>

    <!-- Social Media Links Section -->
    <div class="social-links pb-3">
        <!-- Social Media Title -->
        <div class="social-title">Connect With Us</div>

        <!-- Social Media Icons -->
        <div class="social-link-wrapper">
            <!-- Facebook Link -->
            <a href="https://web.facebook.com/elitebdforangels?rdid=PfjEQvLDxz8BbuKt&share_url=https%3A%2F%2Fweb.facebook.com%2Fshare%2F3GsAomT5FrJYA9vm%2F%3F_rdc%3D1%26_rdr#"
                class="social-link facebook" target="_blank" aria-label="Facebook">
                <i class="bi bi-facebook"></i>
            </a>

            <!-- YouTube Link -->
            <a href="https://www.youtube.com/@elitecorporationofficial" class="social-link youtube" target="_blank"
                aria-label="YouTube">
                <i class="bi bi-youtube"></i>
            </a>
        </div>
    </div>
</footer>
