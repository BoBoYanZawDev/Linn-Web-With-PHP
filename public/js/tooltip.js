const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');

      tooltipTriggerList.forEach(tooltipTriggerEl => {
        new bootstrap.Tooltip(tooltipTriggerEl, {
          placement: 'top', // Always try to place tooltips on top
          fallbackPlacements: [] // Prevent Bootstrap from falling back to any other placement
        });
      });