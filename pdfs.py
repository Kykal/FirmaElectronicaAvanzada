import sys
from reportlab.pdfgen.canvas import Canvas
from datetime import datetime
dt = datetime.now()
import locale
locale.setlocale(locale.LC_ALL, 'es-ES') 

name = "Nombre del firmante: " + sys.argv[1]
rfc = "RFC: " + sys.argv[2]

cerOp = open(sys.argv[3])
cerStr = cerOp.read()
cerOp.close()

keyOp = open(sys.argv[4])
keyStr = keyOp.read()
keyOp.close()
pdf_dir = sys.argv[5]

canvas = Canvas("anexo.pdf")
canvas.drawString(72, 72*8, name)
canvas.drawString(72, 72*7.5, rfc)
canvas.drawString(72, 72*7, "Numero de certificado: " + cerStr)
canvas.drawString(72, 72*6.5, "Firma electronica: " + keyStr) 
canvas.drawString(72, 72*6, "Fecha de firma: " + dt.strftime("%A %d de %B del %Y - %H:%M") + " hr")
canvas.save()

#Merge pdfs

# from PyPDF2 import PdfFileMerger
# pdf_merger = PdfFileMerger()

# pdf_merger.append(pdf_dir)
# pdf_merger.append("./anexo.pdf")

# from pathlib import Path

# with Path("merged.pdf").open(mode="wb") as output_file:
#     pdf_merger.write(output_file)