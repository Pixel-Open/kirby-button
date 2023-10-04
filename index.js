panel.plugin("pixelopen/kirby-button", {
    blocks: {
        "kirby-button": {
            template: `
                <div class="button-container">
                  <a class="button-link" @click="open">
                    <div class="button-content">{{ content.name }}</div>
                  </a>
                </div>
              `,
        },
    },
});