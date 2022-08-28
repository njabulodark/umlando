import img2pdf

# opening from filename
try:
	with open("name.pdf","wb") as f:
		f.write(img2pdf.convert(r'C:\xampp\htdocs\umlando\temp\Screenshot (1).png'))
except:
	print("error")