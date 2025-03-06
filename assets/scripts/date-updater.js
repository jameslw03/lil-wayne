
document.addEventListener("DOMContentLoaded", () => {
    const articleDateElements = document.querySelectorAll(".article-date");

    articleDateElements.forEach(element => {
        const publishedDate = new Date(element.getAttribute("data-published"));
        const now = new Date();
        
        const timeDifference = now - publishedDate;
        const seconds = Math.floor(timeDifference / 1000);
        const minutes = Math.floor(seconds / 60);
        const hours = Math.floor(minutes / 60);
        const days = Math.floor(hours / 24);
        const months = Math.floor(days / 30);
        const years = Math.floor(days / 365);

        let relativeTime = "";
        
        if (years > 0) {
            relativeTime = `${years} year${years > 1 ? 's' : ''} ago`;
        } else if (months > 0) {
            relativeTime = `${months} month${months > 1 ? 's' : ''} ago`;
        } else if (days > 0) {
            relativeTime = `${days} day${days > 1 ? 's' : ''} ago`;
        } else if (hours > 0) {
            relativeTime = `${hours} hour${hours > 1 ? 's' : ''} ago`;
        } else if (minutes > 0) {
            relativeTime = `${minutes} minute${minutes > 1 ? 's' : ''} ago`;
        } else {
            relativeTime = "just now";
        }
        
        // Update the element's text content
        element.textContent = `${publishedDate.toLocaleDateString("en-GB", { day: 'numeric', month: 'short' })} | Updated: ${relativeTime}`;
    });
});
