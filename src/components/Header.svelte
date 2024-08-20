<script>
  import {onMount} from 'svelte';

  let activeItem = 'Über uns';
  let items = [
    {name: 'Über uns', icon: 'icon-about.svg'},
    {name: 'Produkte', icon: 'icon-products.svg'},
    {name: 'Unsere Blog', icon: 'icon-blog.svg'},
    {name: 'Smooth Talks', icon: 'icon-talks.svg'},
    {name: 'Kontaktieren', icon: 'icon-contact.svg'},
  ];

  let akademieSubItems = [
    'Prozess-Manager Ausbildung',
    'Workshops Auszubildende',
    'Workshops Ausbildner',
    'Workshops Mitarbeiter',
  ];

  function handleItemClick(item) {
    activeItem = item;
  }

  onMount(() => {
    // Any initialization logic
  });
</script>

<header class="smooth-flow-header">
  <div class="logo">
    <img src="smooth-flow-logo.svg" alt="Smooth Flow Solutions" />
  </div>
  <nav>
    {#each items as item}
      <div
        class="nav-item"
        class:active={activeItem === item.name}
        on:click={() => handleItemClick(item.name)}
        on:mouseenter={() => {
          /* Handle mouseenter */
        }}
        on:mousedown={() => {
          /* Handle mousedown */
        }}
      >
        <img src={item.icon} alt={item.name} />
        <span>{item.name}</span>
        {#if item.name === 'Akademie'}
          <div class="sub-menu">
            {#each akademieSubItems as subItem}
              <div class="sub-item">{subItem}</div>
            {/each}
          </div>
        {/if}
      </div>
    {/each}
  </nav>
</header>

<style>
  /* CSS styles for the header */
  .smooth-flow-header {
    background-color: #e6f3ff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
  }

  .nav-item {
    display: flex;
    align-items: center;
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 5px;
    transition: background-color 0.3s;
  }

  .nav-item.active {
    background-color: #f0f8ff;
  }

  .nav-item:hover {
    background-color: #d9ecff;
  }

  .sub-menu {
    display: none;
    position: absolute;
    background-color: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    padding: 10px;
  }

  .nav-item:hover .sub-menu {
    display: block;
  }

  /* Add more styles as needed */
</style>
