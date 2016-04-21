<div class="form">
  <h1>Send a Message</h1>
  <form id="contactForm" action="/messages" method="POST" data-ajax="true" on-insert="form:setup">
    <div class="error"><p class="message"></p></div>

    <div class="guts">
      <div class="field">
        <label>Your Name</label>
        <input type="text" name="name" placeholder="Your Name" required="true">
        <span class="message"></span>
      </div>
      
      <div class="field">
        <label>Your Email</label>
        <input type="email" name="email" placeholder="Your Email" required="true">
        <span class="message"></span>
      </div>
      
      <div class="field messageField">
        <textarea name="body" class="input" placeholder="Message" required="true"></textarea>
        <i class="message"></i>
      </div>

      <div>
        <input type="hidden" name="authenticityToken" value="7z1OQO63viQ2ipntpTlTgyYVTIO7BtO+Tzbv6y50ObU="/>
        <button type="submit" class="button">Send Message</button>
      </div>
    </div>
    
    <div class="confirmed">
      <p>Your Message has been sent.</p>
    </div>
  </form>
</div>