// Shared utility function for setting canvas size
function setCanvasSize(canvas, canvasPreview) {
    const screenWidth = window.innerWidth;
    const screenHeight = window.innerHeight;
    const canvasWidth = 0.86 * screenWidth; // 85% of the width
    const canvasHeight = 0.9 * screenHeight; // 90% of the height

    canvas.width = canvasWidth;
    canvas.height = canvasHeight;
    canvasPreview.width = canvasWidth;
    canvasPreview.height = canvasHeight;

    canvas.style.margin = '0px';
}

class SignaturePad {
    constructor(canvasId, canvasPreviewId, formId) {
        this.canvas = document.getElementById(canvasId);
        this.canvasPreview = document.getElementById(canvasPreviewId);
        this.ctx = this.canvas.getContext('2d');
        this.ctxPreview = this.canvasPreview.getContext('2d');
        this.drawing = false;
        this.points = [];
        this.prevPoint = null;

        // Set form and modal references
        this.form = document.getElementById(formId);
        this.modal = document.getElementById('signatureModal');

        // Set canvas size using shared utility function
        setCanvasSize(this.canvas, this.canvasPreview);

        this.canvas.addEventListener('mousedown', this.startDrawing.bind(this));
        this.canvas.addEventListener('mousemove', this.draw.bind(this));
        this.canvas.addEventListener('mouseup', this.stopDrawing.bind(this));

        this.canvas.addEventListener('touchstart', this.touchStart.bind(this));
        this.canvas.addEventListener('touchmove', this.touchMove.bind(this));
        this.canvas.addEventListener('touchend', this.stopDrawing.bind(this));
    }

    startDrawing(e) {
        this.drawing = true;
        this.points = [];
        this.prevPoint = null;
        this.draw(e);
    }

    draw(e) {
        if (!this.drawing) return;

        e.preventDefault();

        const currentX = e.clientX || e.touches[0].clientX - this.canvas.getBoundingClientRect().left;
        const currentY = e.clientY || e.touches[0].clientY - this.canvas.getBoundingClientRect().top;

        this.points.push({ x: currentX, y: currentY });

        if (this.points.length > 1) {
            this.ctx.beginPath();
            this.ctx.moveTo(this.points[0].x, this.points[0].y);

            for (let i = 1; i < this.points.length; i++) {
                const midPoint = {
                    x: (this.points[i].x + this.points[i - 1].x) / 2,
                    y: (this.points[i].y + this.points[i - 1].y) / 2
                };

                this.ctx.lineWidth = Math.random() * 3 + 1;
                this.ctx.strokeStyle = `rgba(0, 0, 0, ${Math.random() * 0.5 + 0.3 + 0.1})`;
                this.ctx.quadraticCurveTo(this.points[i - 1].x, this.points[i - 1].y, midPoint.x, midPoint.y);
                this.ctx.stroke();
                this.prevPoint = this.points[i];
            }
        }

        this.updatePreview();
    }

    touchStart(e) {
        this.drawDot(e.touches[0].clientX - this.canvas.getBoundingClientRect().left, e.touches[0].clientY - this.canvas.getBoundingClientRect().top);
        this.startDrawing(e);
    }

    touchMove(e) {
        this.draw(e);
    }

    stopDrawing() {
        if (this.drawing) {
            this.drawing = false;
            this.prevPoint = null;
        }
    }

    drawDot(x, y) {
        this.ctx.beginPath();
        this.ctx.arc(x, y, 2, 0, Math.PI * 2);
        this.ctx.fillStyle = 'black';
        this.ctx.fill();
    }

    updatePreview() {
        this.ctxPreview.clearRect(0, 0, this.canvasPreview.width, this.canvasPreview.height);
        this.ctxPreview.drawImage(this.canvas, 0, 0, this.canvas.width * 1, this.canvas.height * 1);

        // Set the scaled dimensions for the canvas element
        this.canvasPreview.style.width = (this.canvas.width * 0.3) + 'px';
        this.canvasPreview.style.height = (this.canvas.height * 0.3) + 'px';

        // Make the preview canvas visible
        this.canvasPreview.style.display = 'block';
    }

    saveSignature() {
        let signatureData = this.canvas.toDataURL();
        let formData = new FormData(this.form);
        formData.append('signatureData', signatureData);
        // Send formData to server using AJAX
        // sendToServer(formData);
        console.log('Signature saved:', signatureData);
    }

    clearSignature() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.ctxPreview.clearRect(0, 0, this.canvasPreview.width, this.canvasPreview.height);
    }

    saveAndCloseSignature() {
        this.saveSignature();
        $(this.modal).modal('hide');
        this.updatePreview();
        this.canvasPreview.style.display = 'block';
    }
}

class ParentSignaturePad {
    constructor(canvasId, canvasPreviewId, formId) {
        this.canvas = document.getElementById(canvasId);
        this.canvasPreview = document.getElementById(canvasPreviewId);
        this.ctx = this.canvas.getContext('2d');
        this.ctxPreview = this.canvasPreview.getContext('2d');
        this.drawing = false;
        this.points = [];
        this.prevPoint = null;

        // Set form and modal references
        this.form = document.getElementById(formId);
        this.modal = document.getElementById('parentSignatureModal');

        // Set canvas size using shared utility function
        setCanvasSize(this.canvas, this.canvasPreview);

        this.canvas.addEventListener('mousedown', this.startDrawing.bind(this));
        this.canvas.addEventListener('mousemove', this.draw.bind(this));
        this.canvas.addEventListener('mouseup', this.stopDrawing.bind(this));

        this.canvas.addEventListener('touchstart', this.touchStart.bind(this));
        this.canvas.addEventListener('touchmove', this.touchMove.bind(this));
        this.canvas.addEventListener('touchend', this.stopDrawing.bind(this));
    }

    startDrawing(e) {
        this.drawing = true;
        this.points = [];
        this.prevPoint = null;
        this.draw(e);
    }

    draw(e) {
        if (!this.drawing) return;

        e.preventDefault();

        const currentX = e.clientX || e.touches[0].clientX - this.canvas.getBoundingClientRect().left;
        const currentY = e.clientY || e.touches[0].clientY - this.canvas.getBoundingClientRect().top;

        this.points.push({ x: currentX, y: currentY });

        if (this.points.length > 1) {
            this.ctx.beginPath();
            this.ctx.moveTo(this.points[0].x, this.points[0].y);

            for (let i = 1; i < this.points.length; i++) {
                const midPoint = {
                    x: (this.points[i].x + this.points[i - 1].x) / 2,
                    y: (this.points[i].y + this.points[i - 1].y) / 2
                };

                this.ctx.lineWidth = Math.random() * 3 + 1;
                this.ctx.strokeStyle = `rgba(0, 0, 0, ${Math.random() * 0.5 + 0.3 + 0.1})`;
                this.ctx.quadraticCurveTo(this.points[i - 1].x, this.points[i - 1].y, midPoint.x, midPoint.y);
                this.ctx.stroke();
                this.prevPoint = this.points[i];
            }
        }

        this.updatePreview();
    }

    touchStart(e) {
        this.drawDot(e.touches[0].clientX - this.canvas.getBoundingClientRect().left, e.touches[0].clientY - this.canvas.getBoundingClientRect().top);
        this.startDrawing(e);
    }

    touchMove(e) {
        this.draw(e);
    }

    stopDrawing() {
        if (this.drawing) {
            this.drawing = false;
            this.prevPoint = null;
        }
    }

    drawDot(x, y) {
        this.ctx.beginPath();
        this.ctx.arc(x, y, 2, 0, Math.PI * 2);
        this.ctx.fillStyle = 'black';
        this.ctx.fill();
    }

    updatePreview() {
        this.ctxPreview.clearRect(0, 0, this.canvasPreview.width, this.canvasPreview.height);
        this.ctxPreview.drawImage(this.canvas, 0, 0, this.canvas.width * 1, this.canvas.height * 1);

        // Set the scaled dimensions for the canvas element
        this.canvasPreview.style.width = (this.canvas.width * 0.3) + 'px';
        this.canvasPreview.style.height = (this.canvas.height * 0.3) + 'px';

        // Make the preview canvas visible
        this.canvasPreview.style.display = 'block';
    }

    saveSignature() {
        let signatureData = this.canvas.toDataURL();
        let formData = new FormData(this.form);
        formData.append('signatureData', signatureData);
        // Send formData to server using AJAX
        // sendToServer(formData);
        console.log('Signature saved:', signatureData);
    }

    clearSignature() {
        this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);
        this.ctxPreview.clearRect(0, 0, this.canvasPreview.width, this.canvasPreview.height);
    }

    saveAndCloseSignature() {
        this.saveSignature();
        $(this.modal).modal('hide');
        this.updatePreview();
        this.canvasPreview.style.display = 'block';
    }
}

// Instantiate the class for participant signature
const signaturePad = new SignaturePad('participantSignatureCanvas', 'participantSignatureCanvasPreview', 'participantSignatureForm');

// Additional event listeners if needed
document.getElementById('clearSignatureBtn').addEventListener('click', () => signaturePad.clearSignature());
document.getElementById('saveAndCloseSignatureBtn').addEventListener('click', () => signaturePad.saveAndCloseSignature());


// Instantiate the class for parent signature
const parentSignaturePad = new ParentSignaturePad('parentSignatureCanvas', 'parentSignatureCanvasPreview', 'parentSignatureForm');

// Set canvas size for parent signature
setCanvasSize(parentSignaturePad.canvas, parentSignaturePad.canvasPreview);

// Additional event listeners if needed
document.getElementById('clearParentSignatureBtn').addEventListener('click', () => parentSignaturePad.clearSignature());
document.getElementById('saveAndCloseParentSignatureBtn').addEventListener('click', () => parentSignaturePad.saveAndCloseSignature());
