import './bootstrap';
import Alpine from 'alpinejs';
import { createIcons, icons } from 'lucide';

window.Alpine = Alpine;

Alpine.start();

const renderIcons = () => {
    createIcons({ icons });
};

window.refreshIcons = renderIcons;

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', renderIcons);
} else {
    renderIcons();
}

document.addEventListener('alpine:init', renderIcons);
document.addEventListener('alpine:initialized', renderIcons);
document.addEventListener('alpine:mutation', renderIcons);
