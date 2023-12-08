function downloadPDF() {
    // Replace 'path/to/your/file.pdf' with the actual path to your PDF file
    const pdfPath = 'Paul_GILLET.pdf';

    // Creating a temporary link element
    const link = document.createElement('a');
    link.href = pdfPath;
    link.target = '_blank';
    link.download = 'Paul_GILLET.pdf'; // You can change the downloaded file name if needed

    // Appending the link to the document and triggering a click event
    document.body.appendChild(link);
    link.click();

    // Removing the link from the document
    document.body.removeChild(link);
}