function openModal(type) {
    const modal = document.getElementById(`${type}-modal`);
    if (modal) modal.style.display = 'flex'; // Cambiar a 'flex' para centrarlo
}

function closeModal(type) {
    const modal = document.getElementById(`${type}-modal`);
    if (modal) modal.style.display = 'none';
}
