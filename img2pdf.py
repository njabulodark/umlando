from PIL import Image

image_path = r"C:\xampp\htdocs\img\Screenshot (3).png"

pdf_path = r"C:\xampp\htdocs\img\Screenshot.pdf"

image = Image.open(image_path)
image = image.resize((image.width //2, image.height //2), Image.ANTIALIAS)
image = image.convert("RGB")
image.save(pdf_path)
