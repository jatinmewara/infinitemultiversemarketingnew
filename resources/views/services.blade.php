@include('header')
<link rel="stylesheet" href="{{asset('css/new.css')}}" />
<style>
  body {
    background: #0a0a0a;
    font-family: "Arial", sans-serif;
    color: white;
    overflow-x: hidden;
    line-height: 1.6;
  }
  /* Portfolio Section Styles */
  .portfolio-wrapper {
    max-width: 1200px;
    margin: 0 auto;
  }
  .portfolio-layout {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 50px;
  }
  .portfolio-item {
    background: #1a1a1a;
    border: 1px solid #333;
    border-radius: 20px;
    padding: 40px 30px;
    position: relative;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    opacity: 0;
    transform: translateY(60px);
    overflow: hidden;
  }
  .portfolio-item.reveal {
    opacity: 1;
    transform: translateY(0);
  }

  /* View More functionality styles */
  .portfolio-item.hidden {
    display: none;
  }
  .portfolio-item.show {
    display: block;
    animation: slideInUp 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
  }
  @keyframes slideInUp {
    from {
      opacity: 0;
      transform: translateY(60px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .portfolio-item::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
      360deg,
      rgb(255 255 255 / 10%) 0%,
      transparent 50%
    );
    opacity: 0;
    transition: opacity 0.4s ease;
    border-radius: 20px;
  }
  .portfolio-item:hover::before {
    opacity: 1;
  }
  .portfolio-item:hover {
    transform: translateY(-10px);
    border-color: #ffffff;
    box-shadow: 0 20px 40px rgb(29 236 219 / 11%);
  }
  .item-top {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 30px;
  }
  .portfolio-symbol {
    width: 50px;
    height: 50px;
    border: 2px solid #ec1d24;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
  }
  .portfolio-item:hover .portfolio-symbol {
    background: #ffffff;
    transform: scale(1.1);
  }
  .portfolio-item:hover .portfolio-symbol svg {
    stroke: #000;
  }
  .direction-symbol {
    width: 24px;
    height: 24px;
    transition: transform 0.3s ease;
  }
  .portfolio-item:hover .direction-symbol {
    transform: translate(5px, -5px);
  }
  .portfolio-heading {
    font-size: 20px;
    color: #ffffff;
    font-weight: bold;
    margin-bottom: 20px;
    line-height: 1.3;
  }
  .portfolio-text {
    color: #ccc;
    line-height: 1.6;
    font-size: 16px;
  }
  /* Animation delays for portfolio items */
  .portfolio-item:nth-child(1) {
    transition-delay: 0.1s;
  }
  .portfolio-item:nth-child(2) {
    transition-delay: 0.2s;
  }
  .portfolio-item:nth-child(3) {
    transition-delay: 0.3s;
  }
  .portfolio-item:nth-child(4) {
    transition-delay: 0.4s;
  }
  .portfolio-item:nth-child(5) {
    transition-delay: 0.5s;
  }
  .portfolio-item:nth-child(6) {
    transition-delay: 0.6s;
  }

  /* View More Button Styles */
  .view-more-container {
    text-align: center;
    margin-top: 40px;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.8s;
  }
  .view-more-container.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .view-more-btn {
    background: transparent;
    border: 2px solid #ffffff;
    color: #ffffff;
    padding: 15px 40px;
    border-radius: 50px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
  }
  .view-more-btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: #ffffff;
    transition: left 0.3s ease;
    z-index: -1;
  }
  .view-more-btn:hover::before {
    left: 0;
  }
  .view-more-btn:hover {
    color: #000;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(29, 236, 219, 0.3);
  }
  .view-more-btn:active {
    transform: translateY(0);
  }

  /* About Us Section Styles */
  .about-wrapper {
    max-width: 1400px;
    margin: 0 auto;
    padding: 100px 20px;
  }
  .about-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
  }
  .about-content {
    opacity: 0;
    transform: translateY(60px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .about-content.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .topic-badge {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 30px;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.2s;
  }
  .topic-badge.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .star-symbol {
    color: white;
    font-size: 24px;
    font-weight: bold;
  }
  .badge-label {
    color: white;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
  }
  .primary-text {
    font-size: 16px;
    color: #ccc;
    margin-bottom: 40px;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.6s;
  }
  .primary-text.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .media-block {
    margin-bottom: 30px;
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.8s;
  }
  .media-block.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .media-frame {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    cursor: pointer;
    transition: transform 0.3s ease;
    margin-bottom: 20px;
  }
  .media-frame:hover {
    transform: scale(1.02);
  }
  .media-preview {
    width: 100%;
    max-width: 300px;
    height: auto;
    display: block;
  }
  .play-control {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 60px;
    height: 60px;
    background: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
  }
  .play-control:hover {
    transform: translate(-50%, -50%) scale(1.1);
  }
  .play-triangle {
    width: 0;
    height: 0;
    border-left: 20px solid #000;
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent;
    margin-left: 4px;
  }
  .feedback-block {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
  }
  .rating-icons {
    display: flex;
    gap: 2px;
  }
  .rating-star {
    color: white;
    font-size: 18px;
  }
  .feedback-label {
    color: #ccc;
    font-size: 14px;
  }
  .user-images {
    display: flex;
    gap: -10px;
  }
  .user-photo {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 2px solid #333;
    margin-left: -10px;
  }
  .action-link {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: transparent;
    border: 1px solid white;
    color: white;
    padding: 12px 24px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(30px);
    transition-delay: 1s;
  }
  .action-link.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .action-link:hover {
    background: white;
    color: #000;
    transform: translateY(-2px);
  }
  .metrics-panel {
    opacity: 0;
    transform: translateY(60px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.3s;
  }
  .metrics-panel.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .metrics-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px;
  }
  .metric-box {
    background: #1a1a1a;
    border: 1px solid #333;
    border-radius: 20px;
    padding: 40px 30px;
    text-align: left;
    position: relative;
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    overflow: hidden;
  }
  .metric-box.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .metric-box:nth-child(1) {
    transition-delay: 0.5s;
  }
  .metric-box:nth-child(2) {
    transition-delay: 0.7s;
  }
  .metric-box:nth-child(3) {
    transition-delay: 0.9s;
  }
  .metric-box:nth-child(4) {
    transition-delay: 1.1s;
  }
  .metric-box::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
      135deg,
      rgb(0 255 242 / 10%) 0%,
      transparent 50%
    );
    opacity: 0;
    transition: opacity 0.4s ease;
    border-radius: 20px;
  }
  .metric-box:hover::before {
    opacity: 1;
  }
  .metric-box:hover {
    transform: translateY(-10px);
    border-color: white;
    box-shadow: 0 20px 40px rgba(124, 255, 0, 0.1);
  }
  .metric-symbol {
    position: absolute;
    top: 20px;
    right: 20px;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
  }
  .metric-box:hover .metric-symbol {
    transform: scale(1.2);
  }
  .metric-value {
    font-size: 48px;
    font-weight: bold;
    color: white;
    margin-bottom: 15px;
    line-height: 1;
  }
  .metric-label {
    color: #ccc;
    font-size: 16px;
    line-height: 1.4;
  }
  /* Benefits Section Styles */
  .benefits-wrapper {
    max-width: 1400px;
    margin: 0 auto;
    padding: 100px 20px;
  }
  .benefits-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
  }
  .benefits-content {
    opacity: 0;
    transform: translateY(60px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .benefits-content.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .benefits-text {
    font-size: 16px;
    color: #ccc;
    margin-bottom: 50px;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.6s;
  }
  .benefits-text.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .advantages-list {
    display: flex;
    flex-direction: column;
    gap: 40px;
  }
  .advantage-block {
    border: 1px solid #333;
    border-radius: 16px;
    padding: 30px;
    background: rgba(26, 26, 26, 0.5);
    backdrop-filter: blur(10px);
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    cursor: pointer;
    position: relative;
    overflow: hidden;
  }
  .advantage-block.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .advantage-block:nth-child(1) {
    transition-delay: 0.8s;
  }
  .advantage-block:nth-child(2) {
    transition-delay: 1s;
  }
  .advantage-block:nth-child(3) {
    transition-delay: 1.2s;
  }
  .advantage-block::before {
    content: "";
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
      90deg,
      transparent,
      rgb(255 0 0 / 10%),
      transparent
    );
    transition: left 0.6s ease;
  }
  .advantage-block:hover::before {
    left: 100%;
  }
  .advantage-block:hover {
    border-color: white;
    transform: translateX(10px);
    box-shadow: 0 10px 30px rgb(0 255 252 / 10%);
  }
  .advantage-heading {
    color: #ec1d24;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 15px;
    transition: color 0.3s ease;
  }
  .advantage-block:hover .advantage-heading {
    color: white;
  }
  .advantage-text {
    color: #ccc;
    font-size: 16px;
  }
  .visual-panel {
    opacity: 0;
    transform: translateY(60px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.3s;
  }
  .visual-panel.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .visual-frame {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .visual-frame::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
      135deg,
      rgba(124, 255, 0, 0.2) 0%,
      transparent 50%
    );
    opacity: 0;
    transition: opacity 0.4s ease;
    z-index: 2;
  }
  .visual-frame:hover::before {
    opacity: 1;
  }
  .visual-frame:hover {
    transform: scale(1.02);
    box-shadow: 0 20px 40px rgb(0 70 255 / 9%);
  }
  .visual-photo {
    width: 100%;
    height: auto;
    display: block;
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .visual-frame:hover .visual-photo {
    transform: scale(1.05);
  }
  /* Reviews Section Styles */
  .reviews-wrapper {
    max-width: 1400px;
    margin: 0 auto;
    padding: 100px 20px;
  }
  .reviews-layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
  }
  .reviews-content {
    opacity: 0;
    transform: translateY(60px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .reviews-content.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .reviews-title {
    font-size: 48px;
    font-weight: bold;
    line-height: 1.2;
    margin-bottom: 40px;
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.4s;
  }
  .reviews-title.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .score-panel {
    background: #1a1a1a;
    border: 1px solid #333;
    border-radius: 20px;
    padding: 40px;
    text-align: center;
    opacity: 0;
    transform: translateY(50px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.6s;
    position: relative;
    overflow: hidden;
  }
  .score-panel.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .score-panel::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(
      135deg,
      rgb(0 143 255 / 5%) 0%,
      transparent 50%
    );
    opacity: 0;
    transition: opacity 0.4s ease;
    border-radius: 20px;
  }
  .score-panel:hover::before {
    opacity: 1;
  }
  .score-digit {
    font-size: 52px;
    font-weight: bold;
    color: white;
    margin-bottom: 20px;
    line-height: 1;
  }
  .score-icons {
    display: flex;
    justify-content: center;
    gap: 5px;
    margin-bottom: 20px;
  }
  .score-icon {
    color: white;
    font-size: 24px;
  }
  .score-count {
    color: #ccc;
    font-size: 16px;
    margin-bottom: 30px;
  }
  .score-message {
    font-size: 18px;
    font-weight: 600;
    color: white;
    margin-bottom: 30px;
    line-height: 1.4;
  }
  .score-photos {
    display: flex;
    justify-content: center;
    gap: -10px;
  }
  .score-photo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid #333;
    margin-left: -10px;
  }
  .carousel-panel {
    opacity: 0;
    transform: translateY(60px);
    transition: all 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.3s;
  }
  .carousel-panel.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .carousel-header {
    align-items: center;
    margin-bottom: 40px;
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.5s;
  }
  .carousel-header.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .carousel-info {
    color: #ccc;
    font-size: 16px;
    max-width: 400px;
  }
  .view-all-group {
    display: flex;
    align-items: center;
    gap: 15px;
  }
  .view-all-btn {
    background: #333;
    border: none;
    color: white;
    padding: 12px 24px;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .view-all-btn:hover {
    background: #444;
  }
  .view-all-arrow {
    width: 50px;
    height: 50px;
    background: white;
    border: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .view-all-arrow:hover {
    transform: scale(1.1);
    box-shadow: 0 5px 15px rgba(124, 255, 0, 0.3);
  }
  .carousel-frame {
    position: relative;
    overflow: hidden;
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    transition-delay: 0.7s;
  }
  .carousel-frame.reveal {
    opacity: 1;
    transform: translateY(0);
  }
  .carousel-track {
    display: flex;
    transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
  }
  .review-slide {
    min-width: 100%;
    padding-right: 0;
  }
  .review-body {
    background: transparent;
  }
  .brand-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 20px;
  }
  .brand-icon {
    width: 40px;
    height: 40px;
    background: white;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #000;
  }
  .brand-title {
    font-size: 20px;
    font-weight: 600;
    color: white;
  }
  .review-icons {
    display: flex;
    gap: 3px;
    margin-bottom: 25px;
  }
  .service-head {
    display: block;
    margin: 8rem 0 !important;
    text-align: center;
  }
  .review-icon {
    color: white;
    font-size: 20px;
  }
  .review-message {
    font-size: 18px;
    line-height: 1.6;
    color: white;
    margin-bottom: 30px;
  }
  .reviewer-info {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 30px;
  }
  .reviewer-photo {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    border: 2px solid #333;
  }
  .reviewer-details h4 {
    font-size: 18px;
    font-weight: 600;
    color: white;
    margin-bottom: 5px;
  }
  .reviewer-details p {
    color: #ccc;
    font-size: 14px;
  }
  .carousel-controls {
    display: flex;
    justify-content: flex-end;
    gap: 15px;
  }
  .control-btn {
    width: 50px;
    height: 50px;
    background: #333;
    border: 1px solid #444;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: all 0.3s ease;
  }
  .control-btn:hover {
    background: #444;
    border-color: white;
    transform: translateY(-2px);
  }
  .control-btn.active {
    background: white;
    border-color: white;
  }
  .control-btn.active svg {
    stroke: #000;
  }
  /* Responsive Design */
  @media (max-width: 1024px) {
    .about-layout,
    .benefits-layout,
    .reviews-layout {
      grid-template-columns: 1fr;
      gap: 60px;
    }
    .metrics-layout {
      grid-template-columns: 1fr 1fr;
      gap: 20px;
    }
  }
  @media (max-width: 768px) {
    .portfolio-wrapper,
    .about-wrapper,
    .benefits-wrapper,
    .reviews-wrapper {
      padding: 60px 20px;
    }
    .portfolio-layout {
      grid-template-columns: 1fr;
      gap: 20px;
    }
    .portfolio-item {
      padding: 30px 20px;
    }
    .portfolio-heading {
      font-size: 20px;
    }
    .metrics-layout {
      grid-template-columns: 1fr;
      gap: 20px;
    }
    .metric-box {
      padding: 30px 20px;
    }
    .metric-value {
      font-size: 36px;
    }
    .advantage-block {
      padding: 20px;
    }
    .advantages-list {
      gap: 20px;
    }
    .score-digit {
      font-size: 48px;
    }
    .carousel-header {
      flex-direction: column;
      gap: 20px;
      align-items: flex-start;
    }
  }
</style>

<!-- Portfolio Section -->
<div class="portfolio-wrapper">
  <h1 class="section-title service-head">
    <span class="mcutext">O</span>ur <span class="mcutext">S</span>ervices
  </h1>
  <div class="portfolio-layout">
    <!-- Initial 6 cards (always visible) -->
    <a href="public_relations_media_outreach"><div class="portfolio-item">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <path
              d="M17 5H22V10M17 5L10 12M17 5L12 2M22 10L17 12M22 10V15M10 12L5 7M10 12L7 17M5 7L2 10M7 17L12 22M2 10L7 12M12 22L17 17"
            />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Public Relations (PR) & Media Outreach</h3>
      <p class="portfolio-text">
        We transform your brand into a leading voice. By securing powerful
        placements across influential media, we don't just get you seen—we build
        a legacy of authority and make your name synonymous with your industry.
      </p>
    </div></a>

    <a href="online_reputation_management"><div class="portfolio-item">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            <polyline points="9 12 11 14 15 10" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Online Reputation Management (ORM)</h3>
      <p class="portfolio-text">
        We are the guardians of your digital identity. Our mission is to sculpt
        a flawless public image by neutralizing threats, eliminating negative
        content, and proactively building a positive narrative that ensures your
        reputation is a powerful asset, not a liability.
      </p>
    </div></a>

    <a href="social_media_management_marketing"><div class="portfolio-item">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Social Media Management & Marketing</h3>
      <p class="portfolio-text">
        We turn your social media profiles into powerful ecosystems of
        influence. Our focus is on cultivating a loyal community, sparking
        meaningful engagement, and converting followers into dedicated brand
        advocates who drive real-world growth.
      </p>
    </div></a>

    <a href="account_recovery_security_services"><div class="portfolio-item">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
            <circle cx="12" cy="16" r="2" />
            <path d="M12 18V22" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Account Recovery & Security Services</h3>
      <p class="portfolio-text">
        Specialized services to help you regain access to hacked, disabled, or
        compromised social media and email accounts.
      </p>
    </div></a>

    <a href="search_engine_optimization"><div class="portfolio-item">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <circle cx="11" cy="11" r="8" />
            <line x1="21" y1="21" x2="16.65" y2="16.65" />
            <path d="M13 0a10 10 0 0 1 1.7 20.3M11 0a10 10 0 0 0-1.7 20.3" />
            <path d="M0 11h22" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Search Engine Optimization (SEO)</h3>
      <p class="portfolio-text">
        Services focused on improving your visibility on search engines to drive
        organic traffic and enhance online authority.
      </p>
    </div></a>

    <a href="digital_advertising_lead_generation"><div class="portfolio-item">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <circle cx="12" cy="12" r="10" />
            <circle cx="12" cy="12" r="6" />
            <path d="M12 2v6m0 6v10m-6-6h6m6 0h10" />
            <line x1="12" y1="2" x2="12" y2="22" />
            <line x1="2" y1="12" x2="22" y2="12" />
            <line x1="15" y1="9" x2="9" y2="15" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Digital Advertising & Lead Generation</h3>
      <p class="portfolio-text">
        Managing paid advertising campaigns and strategies to generate targeted
        traffic, leads, and sales for your business.
      </p>
    </div></a>

    <a href="content_creation_design"><div class="portfolio-item hidden extra-card">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <path d="M12 20h9" />
            <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Content Creation & Design</h3>
      <p class="portfolio-text">
        Professional creation of visual and written content to represent your
        brand and communicate your message effectively.
      </p>
    </div></a>

    <a href="web_app_development"><div class="portfolio-item hidden extra-card">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <polyline points="16 18 22 12 16 6" />
            <polyline points="8 6 2 12 8 18" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Web & App Development</h3>
      <p class="portfolio-text">
        Technical development services for creating and maintaining your online
        platforms, from websites to custom plugins.
      </p>
    </div></a>

    <a href="cloud_services_technical_accounts"><div class="portfolio-item hidden extra-card">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <path d="M18 10h-1.26A8 8 0 1 0 9 20h9a5 5 0 0 0 0-10z" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Cloud Services & Technical Accounts</h3>
      <p class="portfolio-text">
        Providing access to and credits for major cloud computing platforms,
        often used for development, hosting, and large-scale operations.
      </p>
    </div></a>

    <a href="influencer_marketing_branding"><div class="portfolio-item hidden extra-card">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <path
              d="M14.5 10c-.8 0-1.5.5-1.5 1.5v3c0 .8.7 1.5 1.5 1.5h.5a2 2 0 0 0 2-2v-3c0-1.1-.9-2-2-2zm-6 0c.8 0 1.5.5 1.5 1.5v3c0 .8-.7 1.5-1.5 1.5h-.5a2 2 0 0 1-2-2v-3c0-1.1.9-2 2-2z"
            />
            <path d="M5.5 4L2 7V22h20V7l-3.5-3.5L12 2l-6.5 2z" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Influencer Marketing & Branding</h3>
      <p class="portfolio-text">
        Leveraging influencers and strategic branding opportunities to build
        credibility and reach a wider audience.
      </p>
    </div></a>

    <a href="speaking_award_opportunities"><div class="portfolio-item hidden extra-card">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <line x1="12" y1="17" x2="12" y2="23" />
            <path d="M12 17H5V2l7 5 7-5V17z" />
            <line x1="7" y1="23" x2="17" y2="23" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">Speaking & Award Opportunities</h3>
      <p class="portfolio-text">
        Securing prestigious speaking engagements and award nominations to build
        personal and brand authority.
      </p>
    </div></a>

    <a href="specialized_digital_marketing_monetization_services"><div class="portfolio-item hidden extra-card">
      <div class="item-top">
        <div class="portfolio-symbol">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <line x1="12" y1="1" x2="12" y2="23" />
            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
          </svg>
        </div>
        <svg
          class="direction-symbol"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="white"
          stroke-width="2"
        >
          <path d="M7 17L17 7" />
          <path d="M7 7h10v10" />
        </svg>
      </div>
      <h3 class="portfolio-heading">
        Specialized Digital Marketing & Monetization Services
      </h3>
      <p class="portfolio-text">
        A range of unique services related to account monetization,
        verification, and premium digital tools.
      </p>
    </div></a>
  </div>

  <!-- View More Button -->
  <div class="view-more-container">
    <button class="cta-button shield-pulse doomButton" id="viewMoreBtn">
      View More Services
    </button>
  </div>
</div>

<!-- About Us Section -->
<div class="about-wrapper">
  <div class="about-layout">
    <div class="about-content">
      <h2 class="section-title text-center">
        <span class="mcutext">E</span>xperts in
        <span class="mcutext">D</span>igital brand<br /><span class="mcutext"
          >I</span
        >nnovation
      </h2>

      <p class="primary-text">
        We specialize in transforming brands through cutting-edge digital
        strategies, blending creativity with technology to drive growth, enhance
        engagement, and deliver memorable experiences.
      </p>

      <div class="media-block">
        <div class="media-frame">
          <div class="play-control">
            <div class="play-triangle"></div>
          </div>
        </div>

        <div class="feedback-block">
          <div class="rating-icons">
            <span class="rating-star">★</span>
            <span class="rating-star">★</span>
            <span class="rating-star">★</span>
            <span class="rating-star">★</span>
            <span class="rating-star">★</span>
          </div>
          <span class="feedback-label">(40+ Reviews)</span>
        </div>

        <div class="user-images">
          <img
            src="img/service/review/one.png"
            alt="Customer 1"
            class="score-photo"
          />
          <img
            src="img/service/review/two.png"
            alt="Customer 2"
            class="score-photo"
          />
          <img
            src="img/service/review/three.png"
            alt="Customer 3"
            class="score-photo"
          />
          <img
            src="img/service/review/four.png"
            alt="Customer 4"
            class="score-photo"
          />
          <img
            src="img/service/review/five.png"
            alt="Customer 5"
            class="score-photo"
          />
        </div>
      </div>

      <a href="contact" class="cta-button shield-pulse doomButton"
        >Contact Us</a
      >
    </div>

    <div class="metrics-panel">
      <div class="metrics-layout">
        <div class="metric-box">
          <div class="metric-symbol">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="white"
              stroke-width="2"
            >
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
          </div>
          <div class="metric-value" data-target="35">0</div>
          <div class="metric-label">Happy Customer Around the World</div>
        </div>

        <div class="metric-box">
          <div class="metric-symbol">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="white"
              stroke-width="2"
            >
              <circle cx="12" cy="12" r="10" />
              <polyline points="12,6 12,12 16,14" />
            </svg>
          </div>
          <div class="metric-value" data-target="120">0</div>
          <div class="metric-label">best client support award achieved</div>
        </div>

        <div class="metric-box">
          <div class="metric-symbol">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="white"
              stroke-width="2"
            >
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
          <div class="metric-value" data-target="250">0</div>
          <div class="metric-label">trusted best partners and sponsors</div>
        </div>

        <div class="metric-box">
          <div class="metric-symbol">
            <svg
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="white"
              stroke-width="2"
            >
              <path d="M14 9V5a3 3 0 0 0-6 0v4" />
              <rect x="2" y="9" width="20" height="12" rx="2" ry="2" />
              <circle cx="12" cy="15" r="1" />
            </svg>
          </div>
          <div class="metric-value" data-target="5">0</div>
          <div class="metric-label">active users using our best services</div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Benefits Section -->
<div class="benefits-wrapper">
  <div class="benefits-layout">
    <div class="benefits-content">
      <h4 class="section-title text-center">
        <span class="mcutext">E</span>xpertise for your
        <span class="mcutext">d</span>igital <br />growth
        <span class="mcutext">j</span>ourney
      </h4>

      <p class="benefits-text">
        Our dedicated team is committed to understanding your unique needs,
        ensuring that we provide innovative strategies that drive results. With
        a focus on quality and integrity.
      </p>

      <div class="advantages-list">
        <div class="advantage-block">
          <h3 class="advantage-heading">Data-Driven Approach</h3>
          <p class="advantage-text">
            We leverage data and insights to make informed decisions that lead
            to more effective and efficient solutions.
          </p>
        </div>

        <div class="advantage-block">
          <h3 class="advantage-heading">Competitive Pricing</h3>
          <p class="advantage-text">
            We offer our top-quality services at competitive prices, providing
            you with great value for your investment.
          </p>
        </div>

        <div class="advantage-block">
          <h3 class="advantage-heading">Ethical Business Practices</h3>
          <p class="advantage-text">
            We maintain the highest level of professionalism and ethical
            standards professionalism in all our business dealings.
          </p>
        </div>
      </div>
    </div>

    <div class="visual-panel">
      <div class="visual-frame">
        <img
          src="img/service/service.png"
          alt="Business meeting with professionals discussing strategy"
          class="visual-photo"
        />
      </div>
    </div>
  </div>
</div>

<!-- Reviews Section -->
<div class="reviews-wrapper">
  <div class="reviews-layout">
    <div class="reviews-content">
      <h4 class="section-title mb-4">
        <span class="mcutext">R</span>ead what they have to say <br /><span
          class="mcutext"
          >a</span
        >bout <span class="mcutext">w</span>orking with us
      </h4>

      <div class="score-panel">
        <div class="score-digit">4.9</div>
        <div class="score-icons">
          <span class="score-icon">★</span>
          <span class="score-icon">★</span>
          <span class="score-icon">★</span>
          <span class="score-icon">★</span>
          <span class="score-icon">★</span>
        </div>
        <div class="score-count">(40+ Reviews)</div>
        <div class="score-message">
          Customer experiences<br />that speak for themselves
        </div>
        <div class="score-photos">
          <img
            src="img/service/review/one.png"
            alt="Customer 1"
            class="score-photo"
          />
          <img
            src="img/service/review/two.png"
            alt="Customer 2"
            class="score-photo"
          />
          <img
            src="img/service/review/three.png"
            alt="Customer 3"
            class="score-photo"
          />
          <img
            src="img/service/review/four.png"
            alt="Customer 4"
            class="score-photo"
          />
          <img
            src="img/service/review/five.png"
            alt="Customer 5"
            class="score-photo"
          />
        </div>
      </div>
    </div>

    <div class="carousel-panel">
      <div class="carousel-frame">
        <div class="carousel-track" id="carouselTrack">
          <div class="review-slide">
            <div class="review-body">
              <div class="brand-header">
                <div class="brand-icon">L</div>
                <div class="brand-title">Logoipsum</div>
              </div>
              <div class="review-icons">
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
              </div>
              <p class="review-message">
                The team transformed our brand's online presence with creativity
                and precision. The results exceeded our expectations! Their
                digital marketing strategies helped us reach a broader audience
                and significantly boosted our sales.
              </p>
              <div class="reviewer-info">
                <img
                  src="img/service/review/one.png"
                  alt="Sarah Mitchell"
                  class="reviewer-photo"
                />
                <div class="reviewer-details">
                  <h4>Sarah Mitchell</h4>
                  <p>Marketing Director</p>
                </div>
              </div>
            </div>
          </div>

          <div class="review-slide">
            <div class="review-body">
              <div class="brand-header">
                <div class="brand-icon">T</div>
                <div class="brand-title">TechCorp</div>
              </div>
              <div class="review-icons">
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
              </div>
              <p class="review-message">
                Outstanding service and incredible attention to detail. They
                understood our vision perfectly and delivered beyond what we
                imagined. The collaborative approach made the entire process
                smooth and enjoyable.
              </p>
              <div class="reviewer-info">
                <img
                  src="img/service/review/two.png"
                  alt="Michael Chen"
                  class="reviewer-photo"
                />
                <div class="reviewer-details">
                  <h4>Michael Chen</h4>
                  <p>CEO</p>
                </div>
              </div>
            </div>
          </div>

          <div class="review-slide">
            <div class="review-body">
              <div class="brand-header">
                <div class="brand-icon">D</div>
                <div class="brand-title">DesignStudio</div>
              </div>
              <div class="review-icons">
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
                <span class="review-icon">★</span>
              </div>
              <p class="review-message">
                Professional, creative, and results-driven. Their innovative
                solutions helped us stand out in a competitive market. The
                team's expertise and dedication to quality is truly impressive.
              </p>
              <div class="reviewer-info">
                <img
                  src="img/service/review/three.png"
                  alt="Emma Rodriguez"
                  class="reviewer-photo"
                />
                <div class="reviewer-details">
                  <h4>Emma Rodriguez</h4>
                  <p>Creative Director</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-controls">
        <button class="control-btn" id="prevControl">
          <svg
            width="20"
            height="20"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <path d="M15 18l-6-6 6-6" />
          </svg>
        </button>
        <button class="control-btn" id="nextControl">
          <svg
            width="20"
            height="20"
            viewBox="0 0 24 24"
            fill="none"
            stroke="white"
            stroke-width="2"
          >
            <path d="M9 18l6-6-6-6" />
          </svg>
        </button>
      </div>
    </div>
  </div>
</div>

@include('footer')

<script>
  // Intersection Observer for scroll animations
  const watcherOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  // Counter animation function
  function animateNumber(element, target, suffix = "") {
    let current = 0;
    const increment = target / 100;
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }

      if (suffix === "k+") {
        element.textContent = Math.floor(current) + " k+";
      } else if (suffix === "+") {
        element.textContent = Math.floor(current) + " +";
      } else {
        element.textContent = Math.floor(current) + suffix;
      }
    }, 20);
  }

  const watcher = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("reveal");

        // For portfolio items
        if (entry.target.classList.contains("portfolio-item")) {
          entry.target.classList.add("reveal");
        }

        // For about section elements
        if (
          entry.target.classList.contains("about-content") ||
          entry.target.classList.contains("metrics-panel")
        ) {
          const childElements = entry.target.querySelectorAll(
            ".topic-badge, .primary-title, .primary-text, .media-block, .action-link, .metric-box"
          );
          childElements.forEach((child) => {
            child.classList.add("reveal");
          });
          // Animate counters for metric boxes
          if (entry.target.classList.contains("metrics-panel")) {
            const metricNumbers =
              entry.target.querySelectorAll(".metric-value");
            setTimeout(() => {
              metricNumbers.forEach((metric) => {
                const target = parseInt(metric.dataset.target);
                if (target === 35) {
                  animateNumber(metric, target, " k+");
                } else if (target === 5) {
                  animateNumber(metric, target, " k+");
                } else {
                  animateNumber(metric, target, " +");
                }
              });
            }, 500);
          }
        }

        // For benefits section elements
        if (
          entry.target.classList.contains("benefits-content") ||
          entry.target.classList.contains("visual-panel")
        ) {
          const childElements = entry.target.querySelectorAll(
            ".topic-badge, .primary-title, .benefits-text, .advantage-block"
          );
          childElements.forEach((child) => {
            child.classList.add("reveal");
          });
        }
        // For reviews section elements
        if (
          entry.target.classList.contains("reviews-content") ||
          entry.target.classList.contains("carousel-panel")
        ) {
          const childElements = entry.target.querySelectorAll(
            ".topic-badge, .reviews-title, .score-panel, .carousel-header, .carousel-frame"
          );
          childElements.forEach((child) => {
            child.classList.add("reveal");
          });
        }
      }
    });
  }, watcherOptions);

  // Observe all animated elements
  document
    .querySelectorAll(
      ".portfolio-item, .about-content, .metrics-panel, .benefits-content, .visual-panel, .reviews-content, .carousel-panel, .view-more-container"
    )
    .forEach((element) => {
      watcher.observe(element);
    });

  // View More functionality
  const viewMoreBtn = document.getElementById("viewMoreBtn");
  const extraCards = document.querySelectorAll(".extra-card");
  let isExpanded = false;

  viewMoreBtn.addEventListener("click", function () {
    if (!isExpanded) {
      // Show extra cards
      extraCards.forEach((card, index) => {
        setTimeout(() => {
          card.classList.remove("hidden");
          card.classList.add("show");
          // Add staggered animation
          card.style.animationDelay = `${index * 0.1}s`;
        }, index * 100);
      });

      viewMoreBtn.textContent = "View Less Services";
      isExpanded = true;
    } else {
      // Hide extra cards
      extraCards.forEach((card, index) => {
        setTimeout(() => {
          card.classList.add("hidden");
          card.classList.remove("show");
        }, index * 50);
      });

      viewMoreBtn.textContent = "View More Services";
      isExpanded = false;

      // Scroll back to services section
      setTimeout(() => {
        document.querySelector(".portfolio-layout").scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }, 300);
    }
  });

  // Reviews Carousel Functionality
  let activeSlide = 0;
  const reviewSlides = document.querySelectorAll(".review-slide");
  const totalReviews = reviewSlides.length;
  const carouselTrack = document.getElementById("carouselTrack");
  const prevControl = document.getElementById("prevControl");
  const nextControl = document.getElementById("nextControl");

  function updateCarousel() {
    const translateX = -activeSlide * 100;
    carouselTrack.style.transform = `translateX(${translateX}%)`;

    // Update control button states
    prevControl.classList.toggle("active", activeSlide > 0);
    nextControl.classList.toggle("active", activeSlide < totalReviews - 1);
  }

  function nextReview() {
    if (activeSlide < totalReviews - 1) {
      activeSlide++;
      updateCarousel();
    }
  }

  function prevReview() {
    if (activeSlide > 0) {
      activeSlide--;
      updateCarousel();
    }
  }

  // Event listeners for control buttons
  nextControl.addEventListener("click", nextReview);
  prevControl.addEventListener("click", prevReview);

  // Auto-slide functionality (optional)
  setInterval(() => {
    if (activeSlide < totalReviews - 1) {
      nextReview();
    } else {
      activeSlide = 0;
      updateCarousel();
    }
  }, 5000);

  // Initialize carousel
  updateCarousel();

  // Add smooth scrolling behavior
  document.documentElement.style.scrollBehavior = "smooth";
</script>
