class MyForm extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <div class="form-card">
    <h3>Get Our Service</h3>
    <hr />
    <form action="https://formsubmit.co/info@seostairs.com" method="POST">
      <div class="row">
        <div class="col-12">
          <div class="form-group">
            <input
              type="text"
              name="Name"
              class="form-control"
              placeholder="Name*"
              required
            />
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <input
              type="email"
              name="Email"
              class="form-control"
              placeholder="Email*"
              required
            />
          </div>
        </div>
        <div class="col-12">
          <div class="form-group">
            <input
              type="tel"
              name="Number"
              class="form-control"
              placeholder="Phone Number*"
              required
            />
          </div>
        </div>
        <div class="col-12">
          <textarea
            class="form-control"
            id="exampleFormControlTextarea1"
            name="Message"
            rows="3"
            placeholder="Message*"
            required
          ></textarea>
          <input type="hidden" name="_next" value="www.seostairs.com/thanks " />
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn-all">Send Message</button>
        </div>
      </div>
    </form>
    <div class="d-none d-md-block d-lg-block">
      <img
        src="./img/form-image.webp"
        alt="Seostairs Form"
        height="150px"
        width="150px"
      />
    </div>
  </div>
      `;
  }
}
customElements.define("my-form", MyForm);
