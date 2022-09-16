import img2pdf
import os

# opening from filename
path = "temp/"
for file_name in os.listdir(path):
<<<<<<< HEAD
	file_name = os.path.splitext(f"temp/{file_name}")[0]
	file_name = file_name[file_name.find("/")+1:]
=======
	file_name = os.path.splitext(f"/temp/{file_name}")[0][6:]
	print(file_name)
>>>>>>> abfb57197b30ab825abb3c0fd4e413f15e5c87fe
	try:
		with open(f"pdf/{file_name}.pdf","wb") as f:
			f.write(img2pdf.convert(f'temp/{file_name}.jpg'))
	except:
		print("error")