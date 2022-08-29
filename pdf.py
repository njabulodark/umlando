import img2pdf

# opening from filename
try:
	with open("pdf/name.pdf","wb") as f:
		f.write(img2pdf.convert(r'temp/name.jpg'))
except:
	print("error")