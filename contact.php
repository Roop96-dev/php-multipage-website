<section class="contact-section">
  <h2>Contact Us</h2>
  <form action="#" method="post" class="contact-form">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" required placeholder="Enter your name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required placeholder="Enter your email">
    </div>

    <div class="form-group">
      <label for="message">Message:</label>
      <textarea name="message" id="message" rows="5" required placeholder="Write your message here..."></textarea>
    </div>

    <button type="submit" class="btn">Send Message</button>
  </form>
</section>

<style>
  .contact-section {
    margin-top: 40px;
    background: #f4f4f4;
    padding: 30px;
    border-radius: 10px;
  }

  .contact-section h2 {
    margin-bottom: 20px;
    text-align: center;
    color: #2c3e50;
  }

  .contact-form {
    display: flex;
    flex-direction: column;
    gap: 15px;
  }

  .form-group {
    display: flex;
    flex-direction: column;
  }

  .form-group label {
    margin-bottom: 5px;
    font-weight: 500;
  }

  .form-group input,
  .form-group textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 1rem;
  }

  .form-group input:focus,
  .form-group textarea:focus {
    border-color: #1abc9c;
    outline: none;
  }

  .btn {
    width: fit-content;
    background-color: #1abc9c;
    color: white;
    border: none;
    padding: 12px 20px;
    font-size: 1rem;
    border-radius: 8px;
    cursor: pointer;
    align-self: center;
    transition: background 0.3s ease;
  }

  .btn:hover {
    background-color: #16a085;
  }
</style>