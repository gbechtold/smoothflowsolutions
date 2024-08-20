import Header from './components/Header.svelte';

document.addEventListener('DOMContentLoaded', () => {
  const headerContainer = document.querySelector('.smooth-flow-header');
  if (headerContainer) {
    new Header({
      target: headerContainer,
    });
  }
});
