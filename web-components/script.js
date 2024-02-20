class CustomMessage extends HTMLElement {
  constructor() {
    super();

    this.attachShadow({ mode: 'open' });

    const template = document.getElementById('custom-message-template');
    const templateContent = template.content;
    this.shadowRoot.appendChild(templateContent.cloneNode(true));
  }

  connectedCallback() {
    const author = this.getAttribute('author');
    const timestamp = this.getAttribute('timestamp');
    const content = this.innerHTML;

    const senderElement = this.shadowRoot.querySelector('.author');
    senderElement.textContent = author;

    const timestampElement = this.shadowRoot.querySelector('.timestamp');
    timestampElement.textContent = timestamp;

    const contentElement = this.shadowRoot.querySelector('.content');
    contentElement.innerHTML = content;

    const profilePhotoElement = this.shadowRoot.querySelector('.profile-photo');
    profilePhotoElement.src = profilePhoto;
  }
}

window.customElements.define('custom-message', CustomMessage);
